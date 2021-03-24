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


| id |  account_id | name |
| -------- | --------- | ------- |
0 | | baseball |
1 |  | basketball | 
2 |  | volleyball | 
3 |  | hockey |
4 |  | football |

_special_activity_

| id |  account_id | name |
| -------- | --------- | ------ |
1 |  | hiking |
2 |  | biking |
3 |  | arts and crafts |
4 |  | boating |


_court_

| id |  account_id | sport_id | quantity | is_outdoors |
| -------- | --------- | ------- | ------ | ----- |
| |  | 1 (basketball) | 2 | true | 
| |  | 1 (basketball) | 3 | false | 
| |  | 3 (hockey) | 3 | false | 

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

| id |  account_id | name | activity_id
| -------- | --------- | ------ | ----- |

_day_type_
determines the schedule - e.g. less activities on a friday or a trip day

| id |  account_id | name | num_activities | day_of_week
| -------- | --------- | ------ | ---- | ----- |


_day_


| id |  account_id | date | type_id |
| -------- | --------- | ------ | ---- |

_activity_type_

| id |  account_id | name | start_time | end_time | 
| -------- | --------- | ------ | ---- | ----- |



_activity_
a slot of time in a day that can be allotted to a specific activity or sport


| id |  account_id | day_id | type_id | is_wet | is_raining | 
| -------- | --------- | ------ | ---- | ---- | ------ |


