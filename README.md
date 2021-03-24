# Camp Scheduler

* Tracks bunks playing sports/doing activities, creates schedules
* Ensures that the bunk does not have the same sport or activity too often
* Handles "leagues" - sports competitions between teams


**Leagues**

Within each age group, each team must compete against every other team in every sport

There is one winning team per age group

## Table Structure 

Note:  may want to add date_created and date_updated to all of these

_Account_
there is generally one account per camp administration office
| id  | camp_name |
| ------------- | ------------- |


_User_
This would be an individual administrator
| id  | account_id | first_name | last_name| email | role_id |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |

_link_user_role_

| user_id | role_id |
| ------- | ------- |

_Role_
The title/position of the administrator


| id  | name |
| --------- | --------- | 


_division_
an age group e.g. eighth grade, high school (mesivta)
| id  | account_id | name | 
| ------------- | ------------- | ------ |

_bunk_

a group of campers that shares a bunkhouse and does activities together
| id  | account_id | name | division_id |
| ------------- | ------------- | ------------- | ------------- |

_counselor_
a bunk's leader/supervisor

| id  | account_id | bunk_id | first_name | last_name|
| -------- | --------- | --------- |  --------- | ------- |

_camper_
a child in the camp

| id |  account_id | bunk_id | team_id | first_name | last_name | birth_date |
| -------- | --------- | --------- |  --------- |  --------- |  --------- | ------ |


_team_
a group of campers that plays sports competitively.  Comprised of campers from multiple bunks

| id |  account_id | name | division_id |
| -------- | --------- | --------- | ------- |

_sport_


| id |  account_id | name | available_when_wet | 
| -------- | --------- | ------- | ---- |
0 | | baseball | 
1 |  | basketball | true |
2 |  | volleyball | 
3 |  | hockey | true |
4 |  | football | 

_special_activity_

| id |  account_id | name |
| -------- | --------- | ------ |
1 |  | hiking |
2 |  | biking |
3 |  | arts and crafts |
4 |  | boating |


_court_
name is sort of like a nickname, location is more descriptive

| id | name | account_id | sport_id | is_outdoors | location | 
| -------- | --------- | ------- | ------ | ----- | ---- |
| | Basketball Court 1 |  | 1  | true | by entrance |
| | Gym | |  1  | false | |
| | Hockey Mega |  | 3  | false |  furthest court |
| | Hockey Megazine |  | 3  | false |  closer court |

?? possibly court cache to store the number of each type of court?

### Time Based Tables
All of these tables are used to track time-related data


_camp_session_
this is usually about a month

| id |  account_id | type_id | start_date | end_date | 
| -------- | --------- | --------- |  --------- | ------ |


_camp_session_type_
either first half (july) or second half (august)

| id |  account_id | name |
| -------- | --------- | ------ |

_game_
a league game
| id |  account_id | name | team_1_id | team_2_id | activity_id |
| -------- | --------- | ------ | ----- | -------- | ------ |

_game_stat_
| id | game_id | is_tie | winner_team_id | loser_team_id |
| -------- | --------- | ------ | ----- | -------- | 


_day_type_
determines the schedule - e.g. less activities on a friday or a trip day

| id |  account_id | name | num_activities | day_of_week
| -------- | --------- | ------ | ---- | ----- |


_day_


| id |  account_id | date | type_id |
| -------- | --------- | ------ | ---- |

_day_session_type_

| id |  account_id | name | start_time | end_time | 
| -------- | --------- | ------ | ---- | ----- |



_day_session_division_
swimming and leagues, all have to be done by the entire division at once
can't swim or have leagues when raining


| id |  account_id | day_id | type_id | is_wet  | is_leagues |
| -------- | --------- | ------ | ---- | ---- | ------ | ---- |


_day_session_activity_
a slot of time in a day that can be allotted to a specific activity or sport.
this is not leagues


| id |  account_id | day_id | type_id | is_wet | | bunk_id | 
| -------- | --------- | ------ | ---- | ---- | ---- |


_day_session_league_game_


| id |  account_id | day_id | type_id | is_wet | | team_id | 
| -------- | --------- | ------ | ---- | ---- | ---- |


