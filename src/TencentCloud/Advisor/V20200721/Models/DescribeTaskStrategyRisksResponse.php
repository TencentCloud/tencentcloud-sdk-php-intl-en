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
namespace TencentCloud\Advisor\V20200721\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskStrategyRisks response structure.
 *
 * @method array getRiskFieldsDesc() Obtain According to this configuration, match the corresponding fields of the risky instance list (Risks), for example:
{"Response":{"RequestId":"111","RiskFieldsDesc":[{"Field":"InstanceId","FieldName":"ID","FieldType":"string","FieldDict":{} },{"Field":"InstanceName","FieldName":"Name","FieldType":"string","FieldDict":{}},{"Field":"InstanceState","FieldName":"Status ","FieldType":"string","FieldDict":{"LAUNCH_FAILED":"Creation failed","PENDING":"Creating","REBOOTING":"Re- starting","RUNNING":"Running","SHUTDOWN":"Stop waiting to be terminated","STARTING":"Starting","STOPPED":"Shut down","STOPPING":"Shutting down"," TERMINATING":"Terminating"}},{"Field":"Zone","FieldName":"Available zone","FieldType":"string","FieldDict":{}},{"Field":" PrivateIPAddresses","FieldName":"Private IP addresses","FieldType":"stringSlice","FieldDict":{}},{"Field":"PublicIPAddresses","FieldName":"Public IP addresses","Field Type":"stringSlice","FieldDict":{}},{"Field":"Region","FieldName":"Region","FieldType":"string","FieldDict":{}},{" Field":"Tags","FieldName":"Tags","FieldType":"tags","FieldDict":{}}],"RiskTotalCount":3,"Risks":"[{\"InstanceId\" :\"ins-xxx1\",\"InstanceName\":\"xxx1\",\"InstanceState\":\"RUNNING\",\"PrivateIPAddresses\":[\"1.17.64.2\"],\ " PublicIPAddresses\":null,\"Region\":\"ap-shanghai\",\"Tags\":null,\"Zone\":\"ap-shanghai-2\"},{\"InstanceId\ ":\"ins-xxx2\",\"InstanceName\":\"xxx2\",\"InstanceState\":\"RUNNING\",\"PrivateIPAddresses\":[\"1.17.64.11\"], \"PublicIPAddresses\":null,\"Region\":\"ap-shanghai\",\"Tags\":null,\"Zone\":\"ap-shanghai-2\"}]"," StrategyId":9}}
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskFieldsDesc(array $RiskFieldsDesc) Set According to this configuration, match the corresponding fields of the risky instance list (Risks), for example:
{"Response":{"RequestId":"111","RiskFieldsDesc":[{"Field":"InstanceId","FieldName":"ID","FieldType":"string","FieldDict":{} },{"Field":"InstanceName","FieldName":"Name","FieldType":"string","FieldDict":{}},{"Field":"InstanceState","FieldName":"Status ","FieldType":"string","FieldDict":{"LAUNCH_FAILED":"Creation failed","PENDING":"Creating","REBOOTING":"Re- starting","RUNNING":"Running","SHUTDOWN":"Stop waiting to be terminated","STARTING":"Starting","STOPPED":"Shut down","STOPPING":"Shutting down"," TERMINATING":"Terminating"}},{"Field":"Zone","FieldName":"Available zone","FieldType":"string","FieldDict":{}},{"Field":" PrivateIPAddresses","FieldName":"Private IP addresses","FieldType":"stringSlice","FieldDict":{}},{"Field":"PublicIPAddresses","FieldName":"Public IP addresses","Field Type":"stringSlice","FieldDict":{}},{"Field":"Region","FieldName":"Region","FieldType":"string","FieldDict":{}},{" Field":"Tags","FieldName":"Tags","FieldType":"tags","FieldDict":{}}],"RiskTotalCount":3,"Risks":"[{\"InstanceId\" :\"ins-xxx1\",\"InstanceName\":\"xxx1\",\"InstanceState\":\"RUNNING\",\"PrivateIPAddresses\":[\"1.17.64.2\"],\ " PublicIPAddresses\":null,\"Region\":\"ap-shanghai\",\"Tags\":null,\"Zone\":\"ap-shanghai-2\"},{\"InstanceId\ ":\"ins-xxx2\",\"InstanceName\":\"xxx2\",\"InstanceState\":\"RUNNING\",\"PrivateIPAddresses\":[\"1.17.64.11\"], \"PublicIPAddresses\":null,\"Region\":\"ap-shanghai\",\"Tags\":null,\"Zone\":\"ap-shanghai-2\"}]"," StrategyId":9}}
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStrategyId() Obtain Assessment item ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyId(integer $StrategyId) Set Assessment item ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRiskTotalCount() Obtain Number of risky instances
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskTotalCount(integer $RiskTotalCount) Set Number of risky instances
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRisks() Obtain Risky instance details list. Require json decode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRisks(string $Risks) Set Risky instance details list. Require json decode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getResourceCount() Obtain Number of inspection resources
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceCount(integer $ResourceCount) Set Number of inspection resources
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeTaskStrategyRisksResponse extends AbstractModel
{
    /**
     * @var array According to this configuration, match the corresponding fields of the risky instance list (Risks), for example:
{"Response":{"RequestId":"111","RiskFieldsDesc":[{"Field":"InstanceId","FieldName":"ID","FieldType":"string","FieldDict":{} },{"Field":"InstanceName","FieldName":"Name","FieldType":"string","FieldDict":{}},{"Field":"InstanceState","FieldName":"Status ","FieldType":"string","FieldDict":{"LAUNCH_FAILED":"Creation failed","PENDING":"Creating","REBOOTING":"Re- starting","RUNNING":"Running","SHUTDOWN":"Stop waiting to be terminated","STARTING":"Starting","STOPPED":"Shut down","STOPPING":"Shutting down"," TERMINATING":"Terminating"}},{"Field":"Zone","FieldName":"Available zone","FieldType":"string","FieldDict":{}},{"Field":" PrivateIPAddresses","FieldName":"Private IP addresses","FieldType":"stringSlice","FieldDict":{}},{"Field":"PublicIPAddresses","FieldName":"Public IP addresses","Field Type":"stringSlice","FieldDict":{}},{"Field":"Region","FieldName":"Region","FieldType":"string","FieldDict":{}},{" Field":"Tags","FieldName":"Tags","FieldType":"tags","FieldDict":{}}],"RiskTotalCount":3,"Risks":"[{\"InstanceId\" :\"ins-xxx1\",\"InstanceName\":\"xxx1\",\"InstanceState\":\"RUNNING\",\"PrivateIPAddresses\":[\"1.17.64.2\"],\ " PublicIPAddresses\":null,\"Region\":\"ap-shanghai\",\"Tags\":null,\"Zone\":\"ap-shanghai-2\"},{\"InstanceId\ ":\"ins-xxx2\",\"InstanceName\":\"xxx2\",\"InstanceState\":\"RUNNING\",\"PrivateIPAddresses\":[\"1.17.64.11\"], \"PublicIPAddresses\":null,\"Region\":\"ap-shanghai\",\"Tags\":null,\"Zone\":\"ap-shanghai-2\"}]"," StrategyId":9}}
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskFieldsDesc;

    /**
     * @var integer Assessment item ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyId;

    /**
     * @var integer Number of risky instances
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskTotalCount;

    /**
     * @var string Risky instance details list. Require json decode.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Risks;

    /**
     * @var integer Number of inspection resources
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceCount;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $RiskFieldsDesc According to this configuration, match the corresponding fields of the risky instance list (Risks), for example:
{"Response":{"RequestId":"111","RiskFieldsDesc":[{"Field":"InstanceId","FieldName":"ID","FieldType":"string","FieldDict":{} },{"Field":"InstanceName","FieldName":"Name","FieldType":"string","FieldDict":{}},{"Field":"InstanceState","FieldName":"Status ","FieldType":"string","FieldDict":{"LAUNCH_FAILED":"Creation failed","PENDING":"Creating","REBOOTING":"Re- starting","RUNNING":"Running","SHUTDOWN":"Stop waiting to be terminated","STARTING":"Starting","STOPPED":"Shut down","STOPPING":"Shutting down"," TERMINATING":"Terminating"}},{"Field":"Zone","FieldName":"Available zone","FieldType":"string","FieldDict":{}},{"Field":" PrivateIPAddresses","FieldName":"Private IP addresses","FieldType":"stringSlice","FieldDict":{}},{"Field":"PublicIPAddresses","FieldName":"Public IP addresses","Field Type":"stringSlice","FieldDict":{}},{"Field":"Region","FieldName":"Region","FieldType":"string","FieldDict":{}},{" Field":"Tags","FieldName":"Tags","FieldType":"tags","FieldDict":{}}],"RiskTotalCount":3,"Risks":"[{\"InstanceId\" :\"ins-xxx1\",\"InstanceName\":\"xxx1\",\"InstanceState\":\"RUNNING\",\"PrivateIPAddresses\":[\"1.17.64.2\"],\ " PublicIPAddresses\":null,\"Region\":\"ap-shanghai\",\"Tags\":null,\"Zone\":\"ap-shanghai-2\"},{\"InstanceId\ ":\"ins-xxx2\",\"InstanceName\":\"xxx2\",\"InstanceState\":\"RUNNING\",\"PrivateIPAddresses\":[\"1.17.64.11\"], \"PublicIPAddresses\":null,\"Region\":\"ap-shanghai\",\"Tags\":null,\"Zone\":\"ap-shanghai-2\"}]"," StrategyId":9}}
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StrategyId Assessment item ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RiskTotalCount Number of risky instances
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Risks Risky instance details list. Require json decode.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ResourceCount Number of inspection resources
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("RiskFieldsDesc",$param) and $param["RiskFieldsDesc"] !== null) {
            $this->RiskFieldsDesc = [];
            foreach ($param["RiskFieldsDesc"] as $key => $value){
                $obj = new RiskFieldsDesc();
                $obj->deserialize($value);
                array_push($this->RiskFieldsDesc, $obj);
            }
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("RiskTotalCount",$param) and $param["RiskTotalCount"] !== null) {
            $this->RiskTotalCount = $param["RiskTotalCount"];
        }

        if (array_key_exists("Risks",$param) and $param["Risks"] !== null) {
            $this->Risks = $param["Risks"];
        }

        if (array_key_exists("ResourceCount",$param) and $param["ResourceCount"] !== null) {
            $this->ResourceCount = $param["ResourceCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
