<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAlarmLog request structure.
 *
 * @method integer getFrom() Obtain Start time of the execution detail to be queried, Unix timestamp, unit: ms.
 * @method void setFrom(integer $From) Set Start time of the execution detail to be queried, Unix timestamp, unit: ms.
 * @method integer getTo() Obtain End time of the execution detail to be queried, Unix timestamp, unit: ms.
 * @method void setTo(integer $To) Set End time of the execution detail to be queried, Unix timestamp, unit: ms.
 * @method string getQuery() Obtain Query filter criteria, for example:
- Query by alert policy ID: `alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971"`
- Query by monitoring object ID: `monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b" `
- Query by alarm policy ID and monitoring object ID: `alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971" AND monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b"`
- Query by alarm policy ID and monitoring object ID, supports SQL statement: `(alert_id:"alarm-5ce45495-09e8-4d58-xxxx-768134bf330c") AND (monitored_object:"3c514e84-6f1f-46ec-xxxx-05de6163f7fe") AND NOT condition_evaluate_result: "Skip" AND condition_evaluate_result:[* TO *] | SELECT count(*) as top50StatisticsTotalCount, count_if(condition_evaluate_result='ProcessError') as top50StatisticsFailureCount, count_if(notification_send_result!='NotSend') as top50NoticeTotalCount, count_if(notification_send_result='SendPartFail' or notification_send_result='SendFail') as top50NoticeFailureCount, alert_id, alert_name, monitored_object, topic_type, happen_threshold, alert_threshold, notify_template group by alert_id, alert_name, monitored_object, topic_type, happen_threshold, alert_threshold, notify_template order by top50StatisticsTotalCount desc limit 1`
 * @method void setQuery(string $Query) Set Query filter criteria, for example:
- Query by alert policy ID: `alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971"`
- Query by monitoring object ID: `monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b" `
- Query by alarm policy ID and monitoring object ID: `alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971" AND monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b"`
- Query by alarm policy ID and monitoring object ID, supports SQL statement: `(alert_id:"alarm-5ce45495-09e8-4d58-xxxx-768134bf330c") AND (monitored_object:"3c514e84-6f1f-46ec-xxxx-05de6163f7fe") AND NOT condition_evaluate_result: "Skip" AND condition_evaluate_result:[* TO *] | SELECT count(*) as top50StatisticsTotalCount, count_if(condition_evaluate_result='ProcessError') as top50StatisticsFailureCount, count_if(notification_send_result!='NotSend') as top50NoticeTotalCount, count_if(notification_send_result='SendPartFail' or notification_send_result='SendFail') as top50NoticeFailureCount, alert_id, alert_name, monitored_object, topic_type, happen_threshold, alert_threshold, notify_template group by alert_id, alert_name, monitored_object, topic_type, happen_threshold, alert_threshold, notify_template order by top50StatisticsTotalCount desc limit 1`
 * @method integer getLimit() Obtain The maximum number of execution details returned in a single query is 1000.
 * @method void setLimit(integer $Limit) Set The maximum number of execution details returned in a single query is 1000.
 * @method string getContext() Obtain Pass the Context value returned by the last API call to retrieve more subsequent logs. A total of up to 10,000 raw logs can be obtained, with an expiration time of 1 hour.Note:* When passing this parameter, do not modify any other parameters except for this one* This is only valid when the retrieval analysis statement (Query) does not contain SQL. For obtaining subsequent SQL results, refer to <a href="https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT Syntax</a>
 * @method void setContext(string $Context) Set Pass the Context value returned by the last API call to retrieve more subsequent logs. A total of up to 10,000 raw logs can be obtained, with an expiration time of 1 hour.Note:* When passing this parameter, do not modify any other parameters except for this one* This is only valid when the retrieval analysis statement (Query) does not contain SQL. For obtaining subsequent SQL results, refer to <a href="https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT Syntax</a>
 * @method string getSort() Obtain Whether the original logs are returned in time order. Optional values are: asc (ascending) or desc (descending). The default is descNote:* This is only valid when the search and analysis statement (Query) does not contain SQL* For SQL result sorting, refer to <a href="https://intl.cloud.tencent.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY Syntax</a>
 * @method void setSort(string $Sort) Set Whether the original logs are returned in time order. Optional values are: asc (ascending) or desc (descending). The default is descNote:* This is only valid when the search and analysis statement (Query) does not contain SQL* For SQL result sorting, refer to <a href="https://intl.cloud.tencent.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY Syntax</a>
 * @method boolean getUseNewAnalysis() Obtain true: Indicates the use of the new retrieval result return method, with valid output parameters AnalysisRecords and Columns.false: Indicates the use of the old retrieval result return method, with valid output parameters AnalysisResults and ColNames.There is a slight difference in encoding format between the two return methods, and it is recommended to use true.
 * @method void setUseNewAnalysis(boolean $UseNewAnalysis) Set true: Indicates the use of the new retrieval result return method, with valid output parameters AnalysisRecords and Columns.false: Indicates the use of the old retrieval result return method, with valid output parameters AnalysisResults and ColNames.There is a slight difference in encoding format between the two return methods, and it is recommended to use true.
 */
class GetAlarmLogRequest extends AbstractModel
{
    /**
     * @var integer Start time of the execution detail to be queried, Unix timestamp, unit: ms.
     */
    public $From;

    /**
     * @var integer End time of the execution detail to be queried, Unix timestamp, unit: ms.
     */
    public $To;

    /**
     * @var string Query filter criteria, for example:
- Query by alert policy ID: `alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971"`
- Query by monitoring object ID: `monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b" `
- Query by alarm policy ID and monitoring object ID: `alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971" AND monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b"`
- Query by alarm policy ID and monitoring object ID, supports SQL statement: `(alert_id:"alarm-5ce45495-09e8-4d58-xxxx-768134bf330c") AND (monitored_object:"3c514e84-6f1f-46ec-xxxx-05de6163f7fe") AND NOT condition_evaluate_result: "Skip" AND condition_evaluate_result:[* TO *] | SELECT count(*) as top50StatisticsTotalCount, count_if(condition_evaluate_result='ProcessError') as top50StatisticsFailureCount, count_if(notification_send_result!='NotSend') as top50NoticeTotalCount, count_if(notification_send_result='SendPartFail' or notification_send_result='SendFail') as top50NoticeFailureCount, alert_id, alert_name, monitored_object, topic_type, happen_threshold, alert_threshold, notify_template group by alert_id, alert_name, monitored_object, topic_type, happen_threshold, alert_threshold, notify_template order by top50StatisticsTotalCount desc limit 1`
     */
    public $Query;

    /**
     * @var integer The maximum number of execution details returned in a single query is 1000.
     */
    public $Limit;

    /**
     * @var string Pass the Context value returned by the last API call to retrieve more subsequent logs. A total of up to 10,000 raw logs can be obtained, with an expiration time of 1 hour.Note:* When passing this parameter, do not modify any other parameters except for this one* This is only valid when the retrieval analysis statement (Query) does not contain SQL. For obtaining subsequent SQL results, refer to <a href="https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT Syntax</a>
     */
    public $Context;

    /**
     * @var string Whether the original logs are returned in time order. Optional values are: asc (ascending) or desc (descending). The default is descNote:* This is only valid when the search and analysis statement (Query) does not contain SQL* For SQL result sorting, refer to <a href="https://intl.cloud.tencent.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY Syntax</a>
     */
    public $Sort;

    /**
     * @var boolean true: Indicates the use of the new retrieval result return method, with valid output parameters AnalysisRecords and Columns.false: Indicates the use of the old retrieval result return method, with valid output parameters AnalysisResults and ColNames.There is a slight difference in encoding format between the two return methods, and it is recommended to use true.
     */
    public $UseNewAnalysis;

    /**
     * @param integer $From Start time of the execution detail to be queried, Unix timestamp, unit: ms.
     * @param integer $To End time of the execution detail to be queried, Unix timestamp, unit: ms.
     * @param string $Query Query filter criteria, for example:
- Query by alert policy ID: `alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971"`
- Query by monitoring object ID: `monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b" `
- Query by alarm policy ID and monitoring object ID: `alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971" AND monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b"`
- Query by alarm policy ID and monitoring object ID, supports SQL statement: `(alert_id:"alarm-5ce45495-09e8-4d58-xxxx-768134bf330c") AND (monitored_object:"3c514e84-6f1f-46ec-xxxx-05de6163f7fe") AND NOT condition_evaluate_result: "Skip" AND condition_evaluate_result:[* TO *] | SELECT count(*) as top50StatisticsTotalCount, count_if(condition_evaluate_result='ProcessError') as top50StatisticsFailureCount, count_if(notification_send_result!='NotSend') as top50NoticeTotalCount, count_if(notification_send_result='SendPartFail' or notification_send_result='SendFail') as top50NoticeFailureCount, alert_id, alert_name, monitored_object, topic_type, happen_threshold, alert_threshold, notify_template group by alert_id, alert_name, monitored_object, topic_type, happen_threshold, alert_threshold, notify_template order by top50StatisticsTotalCount desc limit 1`
     * @param integer $Limit The maximum number of execution details returned in a single query is 1000.
     * @param string $Context Pass the Context value returned by the last API call to retrieve more subsequent logs. A total of up to 10,000 raw logs can be obtained, with an expiration time of 1 hour.Note:* When passing this parameter, do not modify any other parameters except for this one* This is only valid when the retrieval analysis statement (Query) does not contain SQL. For obtaining subsequent SQL results, refer to <a href="https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT Syntax</a>
     * @param string $Sort Whether the original logs are returned in time order. Optional values are: asc (ascending) or desc (descending). The default is descNote:* This is only valid when the search and analysis statement (Query) does not contain SQL* For SQL result sorting, refer to <a href="https://intl.cloud.tencent.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY Syntax</a>
     * @param boolean $UseNewAnalysis true: Indicates the use of the new retrieval result return method, with valid output parameters AnalysisRecords and Columns.false: Indicates the use of the old retrieval result return method, with valid output parameters AnalysisResults and ColNames.There is a slight difference in encoding format between the two return methods, and it is recommended to use true.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("UseNewAnalysis",$param) and $param["UseNewAnalysis"] !== null) {
            $this->UseNewAnalysis = $param["UseNewAnalysis"];
        }
    }
}
