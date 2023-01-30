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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulDefenceSetting response structure.
 *
 * @method integer getIsEnabled() Obtain Whether it is enabled. Valid values: `0` (disabled); `1` (enabled).
 * @method void setIsEnabled(integer $IsEnabled) Set Whether it is enabled. Valid values: `0` (disabled); `1` (enabled).
 * @method integer getScope() Obtain Scope of servers with exploit prevention enabled. Valid values: `0` (specified servers); `1` (all servers).
 * @method void setScope(integer $Scope) Set Scope of servers with exploit prevention enabled. Valid values: `0` (specified servers); `1` (all servers).
 * @method integer getHostCount() Obtain Number of servers with exploit prevention enabled
 * @method void setHostCount(integer $HostCount) Set Number of servers with exploit prevention enabled
 * @method integer getExceptionHostCount() Obtain Number of abnormal servers with exploit prevention enabled
 * @method void setExceptionHostCount(integer $ExceptionHostCount) Set Number of abnormal servers with exploit prevention enabled
 * @method array getHostIDs() Obtain Specified servers with exploit prevention enabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostIDs(array $HostIDs) Set Specified servers with exploit prevention enabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHostTotalCount() Obtain Total number of servers with TCSS activated
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostTotalCount(integer $HostTotalCount) Set Total number of servers with TCSS activated
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSupportDefenseVulCount() Obtain Number of vulnerabilities that can be prevented
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportDefenseVulCount(integer $SupportDefenseVulCount) Set Number of vulnerabilities that can be prevented
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVulDefenceSettingResponse extends AbstractModel
{
    /**
     * @var integer Whether it is enabled. Valid values: `0` (disabled); `1` (enabled).
     */
    public $IsEnabled;

    /**
     * @var integer Scope of servers with exploit prevention enabled. Valid values: `0` (specified servers); `1` (all servers).
     */
    public $Scope;

    /**
     * @var integer Number of servers with exploit prevention enabled
     */
    public $HostCount;

    /**
     * @var integer Number of abnormal servers with exploit prevention enabled
     */
    public $ExceptionHostCount;

    /**
     * @var array Specified servers with exploit prevention enabled
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostIDs;

    /**
     * @var integer Total number of servers with TCSS activated
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostTotalCount;

    /**
     * @var integer Number of vulnerabilities that can be prevented
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportDefenseVulCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $IsEnabled Whether it is enabled. Valid values: `0` (disabled); `1` (enabled).
     * @param integer $Scope Scope of servers with exploit prevention enabled. Valid values: `0` (specified servers); `1` (all servers).
     * @param integer $HostCount Number of servers with exploit prevention enabled
     * @param integer $ExceptionHostCount Number of abnormal servers with exploit prevention enabled
     * @param array $HostIDs Specified servers with exploit prevention enabled
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HostTotalCount Total number of servers with TCSS activated
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SupportDefenseVulCount Number of vulnerabilities that can be prevented
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("ExceptionHostCount",$param) and $param["ExceptionHostCount"] !== null) {
            $this->ExceptionHostCount = $param["ExceptionHostCount"];
        }

        if (array_key_exists("HostIDs",$param) and $param["HostIDs"] !== null) {
            $this->HostIDs = $param["HostIDs"];
        }

        if (array_key_exists("HostTotalCount",$param) and $param["HostTotalCount"] !== null) {
            $this->HostTotalCount = $param["HostTotalCount"];
        }

        if (array_key_exists("SupportDefenseVulCount",$param) and $param["SupportDefenseVulCount"] !== null) {
            $this->SupportDefenseVulCount = $param["SupportDefenseVulCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
