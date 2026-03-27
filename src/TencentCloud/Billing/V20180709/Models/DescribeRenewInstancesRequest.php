<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRenewInstances request structure.
 *
 * @method integer getMaxResults() Obtain Maximum number of instances per page. Value range: 1-100.
 * @method void setMaxResults(integer $MaxResults) Set Maximum number of instances per page. Value range: 1-100.
 * @method string getNextToken() Obtain Token for querying the next page of returned results. NextToken is not needed when calling the API for the first time.
 * @method void setNextToken(string $NextToken) Set Token for querying the next page of returned results. NextToken is not needed when calling the API for the first time.
 * @method boolean getReverse() Obtain Get the sorting order of the instance. The enumerated values are as follows:
false = Ascending (default)
true=Descending
 * @method void setReverse(boolean $Reverse) Set Get the sorting order of the instance. The enumerated values are as follows:
false = Ascending (default)
true=Descending
 * @method array getRenewFlagList() Obtain Renewal flag. Multiple values separated by commas. Enumeration value as follows:
NOTIFY_AND_MANUAL_RENEW: manual renewal.
NOTIFY_AND_AUTO_RENEW: automatic renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: non-renewal upon expiration.
 * @method void setRenewFlagList(array $RenewFlagList) Set Renewal flag. Multiple values separated by commas. Enumeration value as follows:
NOTIFY_AND_MANUAL_RENEW: manual renewal.
NOTIFY_AND_AUTO_RENEW: automatic renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: non-renewal upon expiration.
 * @method array getInstanceIdList() Obtain Instance ID. Multiple IDs separated by commas, with a maximum of 100.
 * @method void setInstanceIdList(array $InstanceIdList) Set Instance ID. Multiple IDs separated by commas, with a maximum of 100.
 * @method string getExpireTimeStart() Obtain Expiry time start, format yyyy-MM-dd HH:mm:ss.
 * @method void setExpireTimeStart(string $ExpireTimeStart) Set Expiry time start, format yyyy-MM-dd HH:mm:ss.
 * @method string getExpireTimeEnd() Obtain Expiry time in the format of yyyy-MM-dd HH:mm:ss.
 * @method void setExpireTimeEnd(string $ExpireTimeEnd) Set Expiry time in the format of yyyy-MM-dd HH:mm:ss.
 */
class DescribeRenewInstancesRequest extends AbstractModel
{
    /**
     * @var integer Maximum number of instances per page. Value range: 1-100.
     */
    public $MaxResults;

    /**
     * @var string Token for querying the next page of returned results. NextToken is not needed when calling the API for the first time.
     */
    public $NextToken;

    /**
     * @var boolean Get the sorting order of the instance. The enumerated values are as follows:
false = Ascending (default)
true=Descending
     */
    public $Reverse;

    /**
     * @var array Renewal flag. Multiple values separated by commas. Enumeration value as follows:
NOTIFY_AND_MANUAL_RENEW: manual renewal.
NOTIFY_AND_AUTO_RENEW: automatic renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: non-renewal upon expiration.
     */
    public $RenewFlagList;

    /**
     * @var array Instance ID. Multiple IDs separated by commas, with a maximum of 100.
     */
    public $InstanceIdList;

    /**
     * @var string Expiry time start, format yyyy-MM-dd HH:mm:ss.
     */
    public $ExpireTimeStart;

    /**
     * @var string Expiry time in the format of yyyy-MM-dd HH:mm:ss.
     */
    public $ExpireTimeEnd;

    /**
     * @param integer $MaxResults Maximum number of instances per page. Value range: 1-100.
     * @param string $NextToken Token for querying the next page of returned results. NextToken is not needed when calling the API for the first time.
     * @param boolean $Reverse Get the sorting order of the instance. The enumerated values are as follows:
false = Ascending (default)
true=Descending
     * @param array $RenewFlagList Renewal flag. Multiple values separated by commas. Enumeration value as follows:
NOTIFY_AND_MANUAL_RENEW: manual renewal.
NOTIFY_AND_AUTO_RENEW: automatic renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: non-renewal upon expiration.
     * @param array $InstanceIdList Instance ID. Multiple IDs separated by commas, with a maximum of 100.
     * @param string $ExpireTimeStart Expiry time start, format yyyy-MM-dd HH:mm:ss.
     * @param string $ExpireTimeEnd Expiry time in the format of yyyy-MM-dd HH:mm:ss.
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
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("Reverse",$param) and $param["Reverse"] !== null) {
            $this->Reverse = $param["Reverse"];
        }

        if (array_key_exists("RenewFlagList",$param) and $param["RenewFlagList"] !== null) {
            $this->RenewFlagList = $param["RenewFlagList"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("ExpireTimeStart",$param) and $param["ExpireTimeStart"] !== null) {
            $this->ExpireTimeStart = $param["ExpireTimeStart"];
        }

        if (array_key_exists("ExpireTimeEnd",$param) and $param["ExpireTimeEnd"] !== null) {
            $this->ExpireTimeEnd = $param["ExpireTimeEnd"];
        }
    }
}
