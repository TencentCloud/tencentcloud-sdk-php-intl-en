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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The custom rule
 *
 * @method string getRuleName() Obtain The rule name.
 * @method void setRuleName(string $RuleName) Set The rule name.
 * @method string getAction() Obtain The rule action. Values:
<li>`trans`: Allow the request.</li>
<li>`drop`: Block the request.</li>
<li>`monitor`: Observe the request.</li>
<li>`ban`: Block the IP.</li>
<li>`redirect`: Redirect the request.</li>
<li>`page`: Return the specified page.</li>
<li>`alg`: Verify the request by Javascript challenge.</li>
 * @method void setAction(string $Action) Set The rule action. Values:
<li>`trans`: Allow the request.</li>
<li>`drop`: Block the request.</li>
<li>`monitor`: Observe the request.</li>
<li>`ban`: Block the IP.</li>
<li>`redirect`: Redirect the request.</li>
<li>`page`: Return the specified page.</li>
<li>`alg`: Verify the request by Javascript challenge.</li>
 * @method string getRuleStatus() Obtain The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
 * @method void setRuleStatus(string $RuleStatus) Set The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
 * @method array getAclConditions() Obtain The custom rule.
 * @method void setAclConditions(array $AclConditions) Set The custom rule.
 * @method integer getRulePriority() Obtain The rule priority. Value range: 0-100.
 * @method void setRulePriority(integer $RulePriority) Set The rule priority. Value range: 0-100.
 * @method integer getRuleID() Obtain The rule ID, which is only used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleID(integer $RuleID) Set The rule ID, which is only used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain The update time, which is only used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set The update time, which is only used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPunishTime() Obtain The IP blocking duration. Value range: 0 seconds - 2 days. Default value: 0 seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPunishTime(integer $PunishTime) Set The IP blocking duration. Value range: 0 seconds - 2 days. Default value: 0 seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPunishTimeUnit() Obtain The unit of the IP blocking duration. Values:
<li>`second`: Second</li>
<li>`minutes`: Minute</li>
<li>`hour`: Hour</li>Default value: second.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPunishTimeUnit(string $PunishTimeUnit) Set The unit of the IP blocking duration. Values:
<li>`second`: Second</li>
<li>`minutes`: Minute</li>
<li>`hour`: Hour</li>Default value: second.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain The name of the custom page, which defaults to an empty string.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set The name of the custom page, which defaults to an empty string.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPageId() Obtain The ID of the custom page, which defaults to 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageId(integer $PageId) Set The ID of the custom page, which defaults to 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRedirectUrl() Obtain The redirection URL, which must be a subdomain name of the site. It defaults to an empty string.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRedirectUrl(string $RedirectUrl) Set The redirection URL, which must be a subdomain name of the site. It defaults to an empty string.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getResponseCode() Obtain The response code returned after redirection, which defaults to 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResponseCode(integer $ResponseCode) Set The response code returned after redirection, which defaults to 0.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AclUserRule extends AbstractModel
{
    /**
     * @var string The rule name.
     */
    public $RuleName;

    /**
     * @var string The rule action. Values:
<li>`trans`: Allow the request.</li>
<li>`drop`: Block the request.</li>
<li>`monitor`: Observe the request.</li>
<li>`ban`: Block the IP.</li>
<li>`redirect`: Redirect the request.</li>
<li>`page`: Return the specified page.</li>
<li>`alg`: Verify the request by Javascript challenge.</li>
     */
    public $Action;

    /**
     * @var string The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
     */
    public $RuleStatus;

    /**
     * @var array The custom rule.
     */
    public $AclConditions;

    /**
     * @var integer The rule priority. Value range: 0-100.
     */
    public $RulePriority;

    /**
     * @var integer The rule ID, which is only used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleID;

    /**
     * @var string The update time, which is only used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var integer The IP blocking duration. Value range: 0 seconds - 2 days. Default value: 0 seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PunishTime;

    /**
     * @var string The unit of the IP blocking duration. Values:
<li>`second`: Second</li>
<li>`minutes`: Minute</li>
<li>`hour`: Hour</li>Default value: second.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PunishTimeUnit;

    /**
     * @var string The name of the custom page, which defaults to an empty string.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var integer The ID of the custom page, which defaults to 0.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageId;

    /**
     * @var string The redirection URL, which must be a subdomain name of the site. It defaults to an empty string.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RedirectUrl;

    /**
     * @var integer The response code returned after redirection, which defaults to 0.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResponseCode;

    /**
     * @param string $RuleName The rule name.
     * @param string $Action The rule action. Values:
<li>`trans`: Allow the request.</li>
<li>`drop`: Block the request.</li>
<li>`monitor`: Observe the request.</li>
<li>`ban`: Block the IP.</li>
<li>`redirect`: Redirect the request.</li>
<li>`page`: Return the specified page.</li>
<li>`alg`: Verify the request by Javascript challenge.</li>
     * @param string $RuleStatus The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
     * @param array $AclConditions The custom rule.
     * @param integer $RulePriority The rule priority. Value range: 0-100.
     * @param integer $RuleID The rule ID, which is only used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime The update time, which is only used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PunishTime The IP blocking duration. Value range: 0 seconds - 2 days. Default value: 0 seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PunishTimeUnit The unit of the IP blocking duration. Values:
<li>`second`: Second</li>
<li>`minutes`: Minute</li>
<li>`hour`: Hour</li>Default value: second.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name The name of the custom page, which defaults to an empty string.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PageId The ID of the custom page, which defaults to 0.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RedirectUrl The redirection URL, which must be a subdomain name of the site. It defaults to an empty string.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ResponseCode The response code returned after redirection, which defaults to 0.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("AclConditions",$param) and $param["AclConditions"] !== null) {
            $this->AclConditions = [];
            foreach ($param["AclConditions"] as $key => $value){
                $obj = new AclCondition();
                $obj->deserialize($value);
                array_push($this->AclConditions, $obj);
            }
        }

        if (array_key_exists("RulePriority",$param) and $param["RulePriority"] !== null) {
            $this->RulePriority = $param["RulePriority"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PunishTime",$param) and $param["PunishTime"] !== null) {
            $this->PunishTime = $param["PunishTime"];
        }

        if (array_key_exists("PunishTimeUnit",$param) and $param["PunishTimeUnit"] !== null) {
            $this->PunishTimeUnit = $param["PunishTimeUnit"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }

        if (array_key_exists("ResponseCode",$param) and $param["ResponseCode"] !== null) {
            $this->ResponseCode = $param["ResponseCode"];
        }
    }
}
