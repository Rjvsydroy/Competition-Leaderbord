
--DRILL DOWN 
--drill down from year to a month,to a specific day
Select D.year, D.month_name,D.month, D.day, COUNT(*)as Total_positive_cases
from fact_table as F, date_dimension as D
where F.reported_date_key = D.date_key
GROUP BY D.year,D.month_name, D.day, D.month
Order by D.month ,d.day, d.year

--ROLL UP 
--number of unresolved case based on year, month and week in toronto
Select P.city, D.year, D.month_name, D.month,D.week_num, SUM(CASE WHEN F.fatal THEN 1 ELSE 0 END) as fatal
from fact_table as F, date_dimension as D, phu_dimension as P
where F.reported_date_key = D.date_key AND P.city= 'Toronto'
group by P.city, D.month,D.week_num, D.month_name, D.year, rollup(D.week_num, D.month_name, D.year)
order by D.year, D.month_name, D.week_num, D.month




-- WINDOW CLAUSE 
--compare the number of fatal cases in Ottawa to that of the previous and next months
SELECT P.city, D.month, AVG(CASE WHEN F.fatal THEN 1 ELSE 0 END) OVER W AS movavg
FROM fact_table F, date_dimension D, phu_dimension P
WHERE P.phu_key = F.phu_key AND D.date_key = F.reported_date_key AND P.city = 'Ottawa' AND D.month_name = 'April'
WINDOW W AS (PARTITION BY P.city
	order BY D.month
	range BETWEEN 2 PRECEDING AND CURRENT ROW)
	
	
COMBINING

- Number of resolved cases by PHU drilled down to the day(drill down and slice)

Select P.name,D.day, D.month_name, sum(c.resolved)
from covid_cases C, phu P, date D
where C.case_reported_date = D.date_key and C.phu_key = P.phu_key
GROUP BY D.year,D.month_name, D.day, P.name
Order by p.name, D.day


- Number of fatal cases by group age drilled down to day (drill down and slice)

SELECT P.age_group, D.year, D.month_name, D.day, SUM(C.fatal)
FROM covid_cases C, date D, patient P 
where P.patient_key = C.patient_key AND D.date_key = C.case_reported_date   
GROUP BY P.age_group, D.year, D.month_name, D.day
order by P.age_group, D.year, D.month_name, D.day


Select D.year, D.month_name,D.month, D.day, P.city, COUNT(*)as Total_positive_cases
from fact_table as F, date_dimension as D, phu_dimension P, special_measures_dimesnion S 
where F.reported_date_key = D.date_key
GROUP BY D.year,D.month_name, D.day, D.month,P.city
Order by D.month ,d.day, d.year