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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Layer-7 rule health check parameter
 *
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method integer getEnable() Obtain 1: enabled, 0: disabled
 * @method void setEnable(integer $Enable) Set 1: enabled, 0: disabled
 * @method integer getInterval() Obtain Detection interval in seconds
 * @method void setInterval(integer $Interval) Set Detection interval in seconds
 * @method integer getKickNum() Obtain Unhealthy threshold in times.
 * @method void setKickNum(integer $KickNum) Set Unhealthy threshold in times.
 * @method integer getAliveNum() Obtain Healthy threshold in times.
 * @method void setAliveNum(integer $AliveNum) Set Healthy threshold in times.
 * @method string getMethod() Obtain HTTP request method. Valid values: [HEAD, GET]
 * @method void setMethod(string $Method) Set HTTP request method. Valid values: [HEAD, GET]
 * @method integer getStatusCode() Obtain Healthy status code during health check. xx = 1, 2xx = 2, 3xx = 4, 4xx = 8, 5xx = 16. Multiple status code values are added up
 * @method void setStatusCode(integer $StatusCode) Set Healthy status code during health check. xx = 1, 2xx = 2, 3xx = 4, 4xx = 8, 5xx = 16. Multiple status code values are added up
 * @method string getUrl() Obtain URL of checked directory. Default value: /
 * @method void setUrl(string $Url) Set URL of checked directory. Default value: /
 * @method integer getStatus() Obtain Configuration status. 0: normal, 1: configuring, 2: configuration failed
 * @method void setStatus(integer $Status) Set Configuration status. 0: normal, 1: configuring, 2: configuration failed
 */
class L7RuleHealth extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var integer 1: enabled, 0: disabled
     */
    public $Enable;

    /**
     * @var integer Detection interval in seconds
     */
    public $Interval;

    /**
     * @var integer Unhealthy threshold in times.
     */
    public $KickNum;

    /**
     * @var integer Healthy threshold in times.
     */
    public $AliveNum;

    /**
     * @var string HTTP request method. Valid values: [HEAD, GET]
     */
    public $Method;

    /**
     * @var integer Healthy status code during health check. xx = 1, 2xx = 2, 3xx = 4, 4xx = 8, 5xx = 16. Multiple status code values are added up
     */
    public $StatusCode;

    /**
     * @var string URL of checked directory. Default value: /
     */
    public $Url;

    /**
     * @var integer Configuration status. 0: normal, 1: configuring, 2: configuration failed
     */
    public $Status;

    /**
     * @param string $RuleId Rule ID
     * @param integer $Enable 1: enabled, 0: disabled
     * @param integer $Interval Detection interval in seconds
     * @param integer $KickNum Unhealthy threshold in times.
     * @param integer $AliveNum Healthy threshold in times.
     * @param string $Method HTTP request method. Valid values: [HEAD, GET]
     * @param integer $StatusCode Healthy status code during health check. xx = 1, 2xx = 2, 3xx = 4, 4xx = 8, 5xx = 16. Multiple status code values are added up
     * @param string $Url URL of checked directory. Default value: /
     * @param integer $Status Configuration status. 0: normal, 1: configuring, 2: configuration failed
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("KickNum",$param) and $param["KickNum"] !== null) {
            $this->KickNum = $param["KickNum"];
        }

        if (array_key_exists("AliveNum",$param) and $param["AliveNum"] !== null) {
            $this->AliveNum = $param["AliveNum"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
