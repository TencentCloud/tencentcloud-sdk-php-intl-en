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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCallInMetrics request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method boolean getEnabledSkillGroup() Obtain Whether to return skill group dimension information or not (the default is "yes").
 * @method void setEnabledSkillGroup(boolean $EnabledSkillGroup) Set Whether to return skill group dimension information or not (the default is "yes").
 * @method boolean getEnabledNumber() Obtain Whether to return line dimension information or not (the default is "no").
 * @method void setEnabledNumber(boolean $EnabledNumber) Set Whether to return line dimension information or not (the default is "no").
 * @method array getGroupIdList() Obtain Filter skill group list.
 * @method void setGroupIdList(array $GroupIdList) Set Filter skill group list.
 */
class DescribeCallInMetricsRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var boolean Whether to return skill group dimension information or not (the default is "yes").
     */
    public $EnabledSkillGroup;

    /**
     * @var boolean Whether to return line dimension information or not (the default is "no").
     */
    public $EnabledNumber;

    /**
     * @var array Filter skill group list.
     */
    public $GroupIdList;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param boolean $EnabledSkillGroup Whether to return skill group dimension information or not (the default is "yes").
     * @param boolean $EnabledNumber Whether to return line dimension information or not (the default is "no").
     * @param array $GroupIdList Filter skill group list.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("EnabledSkillGroup",$param) and $param["EnabledSkillGroup"] !== null) {
            $this->EnabledSkillGroup = $param["EnabledSkillGroup"];
        }

        if (array_key_exists("EnabledNumber",$param) and $param["EnabledNumber"] !== null) {
            $this->EnabledNumber = $param["EnabledNumber"];
        }

        if (array_key_exists("GroupIdList",$param) and $param["GroupIdList"] !== null) {
            $this->GroupIdList = $param["GroupIdList"];
        }
    }
}
