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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTimeShiftRecordDetail request structure.
 *
 * @method string getDomain() Obtain The push domain.
 * @method void setDomain(string $Domain) Set The push domain.
 * @method string getAppName() Obtain The push path.
 * @method void setAppName(string $AppName) Set The push path.
 * @method string getStreamName() Obtain The stream name.
 * @method void setStreamName(string $StreamName) Set The stream name.
 * @method integer getStartTime() Obtain The start time, which must be a Unix timestamp.
 * @method void setStartTime(integer $StartTime) Set The start time, which must be a Unix timestamp.
 * @method integer getEndTime() Obtain The end time, which must be a Unix timestamp. 
 * @method void setEndTime(integer $EndTime) Set The end time, which must be a Unix timestamp. 
 * @method string getDomainGroup() Obtain The group the push domain belongs to. You don’t need to specify this parameter if the domain doesn’t belong to any group or the group name is an empty string.
 * @method void setDomainGroup(string $DomainGroup) Set The group the push domain belongs to. You don’t need to specify this parameter if the domain doesn’t belong to any group or the group name is an empty string.
 * @method integer getTransCodeId() Obtain The transcoding template ID. You don’t need to specify this parameter if the transcoding template ID is `0`.
 * @method void setTransCodeId(integer $TransCodeId) Set The transcoding template ID. You don’t need to specify this parameter if the transcoding template ID is `0`.
 */
class DescribeTimeShiftRecordDetailRequest extends AbstractModel
{
    /**
     * @var string The push domain.
     */
    public $Domain;

    /**
     * @var string The push path.
     */
    public $AppName;

    /**
     * @var string The stream name.
     */
    public $StreamName;

    /**
     * @var integer The start time, which must be a Unix timestamp.
     */
    public $StartTime;

    /**
     * @var integer The end time, which must be a Unix timestamp. 
     */
    public $EndTime;

    /**
     * @var string The group the push domain belongs to. You don’t need to specify this parameter if the domain doesn’t belong to any group or the group name is an empty string.
     */
    public $DomainGroup;

    /**
     * @var integer The transcoding template ID. You don’t need to specify this parameter if the transcoding template ID is `0`.
     */
    public $TransCodeId;

    /**
     * @param string $Domain The push domain.
     * @param string $AppName The push path.
     * @param string $StreamName The stream name.
     * @param integer $StartTime The start time, which must be a Unix timestamp.
     * @param integer $EndTime The end time, which must be a Unix timestamp. 
     * @param string $DomainGroup The group the push domain belongs to. You don’t need to specify this parameter if the domain doesn’t belong to any group or the group name is an empty string.
     * @param integer $TransCodeId The transcoding template ID. You don’t need to specify this parameter if the transcoding template ID is `0`.
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

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DomainGroup",$param) and $param["DomainGroup"] !== null) {
            $this->DomainGroup = $param["DomainGroup"];
        }

        if (array_key_exists("TransCodeId",$param) and $param["TransCodeId"] !== null) {
            $this->TransCodeId = $param["TransCodeId"];
        }
    }
}
