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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIpAccessControl request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method integer getCount() Obtain Count identifier
 * @method void setCount(integer $Count) Set Count identifier
 * @method integer getActionType() Obtain Action. 40 for querying the allowlist, 42 for querying the blocklist
 * @method void setActionType(integer $ActionType) Set Action. 40 for querying the allowlist, 42 for querying the blocklist
 * @method integer getVtsMin() Obtain Timestamp of the minimum valid time
 * @method void setVtsMin(integer $VtsMin) Set Timestamp of the minimum valid time
 * @method integer getVtsMax() Obtain Timestamp of the maximum valid time
 * @method void setVtsMax(integer $VtsMax) Set Timestamp of the maximum valid time
 * @method integer getCtsMin() Obtain Timestamp for minimum creation time
 * @method void setCtsMin(integer $CtsMin) Set Timestamp for minimum creation time
 * @method integer getCtsMax() Obtain Timestamp for Maximum Creation Time
 * @method void setCtsMax(integer $CtsMax) Set Timestamp for Maximum Creation Time
 * @method integer getOffSet() Obtain Paging offset, a multiple of limit. The minimum value is 0, and the maximum value is Total/Limit rounded up.
 * @method void setOffSet(integer $OffSet) Set Paging offset, a multiple of limit. The minimum value is 0, and the maximum value is Total/Limit rounded up.
 * @method integer getLimit() Obtain Number of records returned per page, which is 20 by default.
 * @method void setLimit(integer $Limit) Set Number of records returned per page, which is 20 by default.
 * @method string getSource() Obtain Source.
 * @method void setSource(string $Source) Set Source.
 * @method string getSort() Obtain Sort parameters
 * @method void setSort(string $Sort) Set Sort parameters
 * @method string getIp() Obtain IP
 * @method void setIp(string $Ip) Set IP
 * @method integer getValidStatus() Obtain Effective status.
 * @method void setValidStatus(integer $ValidStatus) Set Effective status.
 * @method string getValidTimeStampMin() Obtain Timestamp of the minimum valid time
 * @method void setValidTimeStampMin(string $ValidTimeStampMin) Set Timestamp of the minimum valid time
 * @method string getValidTimeStampMax() Obtain Timestamp of the maximum valid time
 * @method void setValidTimeStampMax(string $ValidTimeStampMax) Set Timestamp of the maximum valid time
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method integer getTimerType() Obtain Filter by scheduled task type. Valid values: 0, 1, 2, 3, 4.
 * @method void setTimerType(integer $TimerType) Set Filter by scheduled task type. Valid values: 0, 1, 2, 3, 4.
 */
class DescribeIpAccessControlRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var integer Count identifier
     */
    public $Count;

    /**
     * @var integer Action. 40 for querying the allowlist, 42 for querying the blocklist
     */
    public $ActionType;

    /**
     * @var integer Timestamp of the minimum valid time
     * @deprecated
     */
    public $VtsMin;

    /**
     * @var integer Timestamp of the maximum valid time
     * @deprecated
     */
    public $VtsMax;

    /**
     * @var integer Timestamp for minimum creation time
     */
    public $CtsMin;

    /**
     * @var integer Timestamp for Maximum Creation Time
     */
    public $CtsMax;

    /**
     * @var integer Paging offset, a multiple of limit. The minimum value is 0, and the maximum value is Total/Limit rounded up.
     */
    public $OffSet;

    /**
     * @var integer Number of records returned per page, which is 20 by default.
     */
    public $Limit;

    /**
     * @var string Source.
     */
    public $Source;

    /**
     * @var string Sort parameters
     */
    public $Sort;

    /**
     * @var string IP
     */
    public $Ip;

    /**
     * @var integer Effective status.
     */
    public $ValidStatus;

    /**
     * @var string Timestamp of the minimum valid time
     */
    public $ValidTimeStampMin;

    /**
     * @var string Timestamp of the maximum valid time
     */
    public $ValidTimeStampMax;

    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var integer Filter by scheduled task type. Valid values: 0, 1, 2, 3, 4.
     */
    public $TimerType;

    /**
     * @param string $Domain Domain name
     * @param integer $Count Count identifier
     * @param integer $ActionType Action. 40 for querying the allowlist, 42 for querying the blocklist
     * @param integer $VtsMin Timestamp of the minimum valid time
     * @param integer $VtsMax Timestamp of the maximum valid time
     * @param integer $CtsMin Timestamp for minimum creation time
     * @param integer $CtsMax Timestamp for Maximum Creation Time
     * @param integer $OffSet Paging offset, a multiple of limit. The minimum value is 0, and the maximum value is Total/Limit rounded up.
     * @param integer $Limit Number of records returned per page, which is 20 by default.
     * @param string $Source Source.
     * @param string $Sort Sort parameters
     * @param string $Ip IP
     * @param integer $ValidStatus Effective status.
     * @param string $ValidTimeStampMin Timestamp of the minimum valid time
     * @param string $ValidTimeStampMax Timestamp of the maximum valid time
     * @param integer $RuleId Rule ID
     * @param integer $TimerType Filter by scheduled task type. Valid values: 0, 1, 2, 3, 4.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("VtsMin",$param) and $param["VtsMin"] !== null) {
            $this->VtsMin = $param["VtsMin"];
        }

        if (array_key_exists("VtsMax",$param) and $param["VtsMax"] !== null) {
            $this->VtsMax = $param["VtsMax"];
        }

        if (array_key_exists("CtsMin",$param) and $param["CtsMin"] !== null) {
            $this->CtsMin = $param["CtsMin"];
        }

        if (array_key_exists("CtsMax",$param) and $param["CtsMax"] !== null) {
            $this->CtsMax = $param["CtsMax"];
        }

        if (array_key_exists("OffSet",$param) and $param["OffSet"] !== null) {
            $this->OffSet = $param["OffSet"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
        }

        if (array_key_exists("ValidTimeStampMin",$param) and $param["ValidTimeStampMin"] !== null) {
            $this->ValidTimeStampMin = $param["ValidTimeStampMin"];
        }

        if (array_key_exists("ValidTimeStampMax",$param) and $param["ValidTimeStampMax"] !== null) {
            $this->ValidTimeStampMax = $param["ValidTimeStampMax"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("TimerType",$param) and $param["TimerType"] !== null) {
            $this->TimerType = $param["TimerType"];
        }
    }
}
