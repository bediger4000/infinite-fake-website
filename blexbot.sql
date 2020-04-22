select to_char(request_dt, 'yyyy-mm-dd') as "dt",  count(access_log.user_agent_id) as "blexbot_cnt"
from access_log where user_agent_id in (
		select user_agent_id from user_agent_d
		where user_agent in (
			'Mozilla/5.0 (compatible; BLEXBot/1.0; +http://webmeup-crawler.com/)',
			'Mozilla/5.0 (compatible; BLEXBot/1.0; +http://webmeup-crawler.com/)'
		)
)
group by dt
order by dt asc
;
