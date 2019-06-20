--55 : Sélectionner les employés qui travaillent à LILLE.

select *
from emp
where noserv = ( select noserv
				from serv
				where ville = 'LILLE'
) 
-- Ne fonctionne parce que la parenthèse retroune plusieurs éléments et non un seul

select *
from emp
where noserv in ( select noserv
				from serv
				where ville = "LILLE"
)
-- du coup il est important ici de penser a mettre un in et non un =

select distinct nom, ville
from emp, serv
where emp.noserv = serv.noserv
and ville ="lille";

select nom , prenom, ville
from emp
inner join serv on serv.noserv = emp.noserv
where ville="lille"


--56 : Sélectionner les employés qui ont le même chef que DUBOIS, DUBOIS exclu.

select nom, prenom 
from emp 
where sup = (select sup 
                from emp 
                where nom='DUBOIS'
) 
and nom!='DUBOIS'

select total.*
from emp as dubois

inner join emp as total
on dubois.sup=total.sup -- condition de jointure lors d'un inner join ! 
and dubois.nom="DUBOIS" 
and total.nom!="DUBOIS"

--57 : Sélectionner les employés embauchés le même jour que DUMONT.

select *
from emp
where embauche = (  select embauche
					from emp
					where nom = 'Dumont')
select total.*
from emp as dumont

inner join emp as total
on dumont.embauche = total.embauche 
and dumont.nom="DUMONT"

--58 : Sélectionner les nom et date d'embauche des employés plus anciens que MINET,
--dans l’ordre des embauches.

select nom,embauche
from emp
where embauche < (select embauche
					from emp
					where nom = 'MINET')
order by embauche asc

--59 : Sélectionner le nom, le prénom, la date d’embauche des employés plus anciens
--que tous les employés du service N°6. (Attention MIN).

select nom,prenom,embauche 
from emp
where embauche < (select min(embauche) -- utilisisation de la fonction MIN
					from emp
					where noserv=6)

select
	res.*
from
	emp as res
inner join (
		select min(emp.embauche) as embauche
	from
		emp
	where
		noserv = 6 ) minTable 
    on
	res.embauche < minTable.embauche

--60 : Sélectionner le nom, le prénom, le revenu mensuel des employés qui gagnent
--plus qu'au moins un employé du service N°3, trier le résultat dans l'ordre croissant
--des revenus mensuels.

select nom,prenom,sal,IFNULL(comm,0)
from emp 
where sal+IFNULL(comm,0) > = (
    select min(sal+IFNULL(comm,0)) 
    from emp where noserv="3")
group by sal+IFNULL(comm,0) asc

select nom,prenom,(sal+IFNULL(comm,0)) as revenu
from emp
where (sal+IFNULL(comm,0))>=(select min(sal+IFNULL(comm,0)) from emp where noserv=3)
group by sal+IFNULL(comm,0) asc;

----------------------------------- INNER JOIN ----------------------------

select
	nom,
	prenom,
	(sal + ifnull(comm,
	0)) as revenu -- on pose un 'as' optionnel
from
	emp
inner join (
	select
		min(sal + ifnull(comm, 0)) mini -- ici pas de 'as' ATTENTION c'est une fonction
	from
		emp
	where
		noserv = 3) minTable on -- ici non plus pas de 'as' c'est optionnel
	(sal + ifnull(comm, -- ici il ne veux pas me prendre revenu PK ????? grrrrr
	0)) >= minTable.mini
order by revenu



--61 : Sélectionner les noms, le numéro de service, l’emplois et le salaires des
--personnes travaillant dans la même ville que HAVET.

select 
    nom,
    prenom,
    noserv,
    sal
from 
    emp
inner join serv on 
        serv.noserv = emp.noserv
    where 
        ville = (   select 
                        ville
                    from 
                        emp
                    inner join 
                        serv on 
                                emp.noserv=serv.noserv 
                    where 
                        nom = ( select nom 
                                from emp 
                                where nom='HAVET')
                )