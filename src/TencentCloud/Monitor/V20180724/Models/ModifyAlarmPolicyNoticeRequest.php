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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmPolicyNotice request structure.
 *
 * @method string getModule() Obtain Module name, which is specified as `monitor`.
 * @method void setModule(string $Module) Set Module name, which is specified as `monitor`.
 * @method string getPolicyId() Obtain Alarm policy ID. If both `PolicyIds` and this parameter are returned, only `PolicyIds` takes effect.
 * @method void setPolicyId(string $PolicyId) Set Alarm policy ID. If both `PolicyIds` and this parameter are returned, only `PolicyIds` takes effect.
 * @method array getNoticeIds() Obtain List of alarm notification template IDs.
 * @method void setNoticeIds(array $NoticeIds) Set List of alarm notification template IDs.
 * @method array getPolicyIds() Obtain Alarm policy ID array, which can be used to associate notification templates with multiple alarm policies. Max value: 30.
 * @method void setPolicyIds(array $PolicyIds) Set Alarm policy ID array, which can be used to associate notification templates with multiple alarm policies. Max value: 30.
 * @method array getHierarchicalNotices() Obtain Notification rules for different alarm levels
 * @method void setHierarchicalNotices(array $HierarchicalNotices) Set Notification rules for different alarm levels
 */
class ModifyAlarmPolicyNoticeRequest extends AbstractModel
{
    /**
     * @var string Module name, which is specified as `monitor`.
     */
    public $Module;

    /**
     * @var string Alarm policy ID. If both `PolicyIds` and this parameter are returned, only `PolicyIds` takes effect.
     */
    public $PolicyId;

    /**
     * @var array List of alarm notification template IDs.
     */
    public $NoticeIds;

    /**
     * @var array Alarm policy ID array, which can be used to associate notification templates with multiple alarm policies. Max value: 30.
     */
    public $PolicyIds;

    /**
     * @var array Notification rules for different alarm levels
     */
    public $HierarchicalNotices;

    /**
     * @param string $Module Module name, which is specified as `monitor`.
     * @param string $PolicyId Alarm policy ID. If both `PolicyIds` and this parameter are returned, only `PolicyIds` takes effect.
     * @param array $NoticeIds List of alarm notification template IDs.
     * @param array $PolicyIds Alarm policy ID array, which can be used to associate notification templates with multiple alarm policies. Max value: 30.
     * @param array $HierarchicalNotices Notification rules for different alarm levels
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("NoticeIds",$param) and $param["NoticeIds"] !== null) {
            $this->NoticeIds = $param["NoticeIds"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("HierarchicalNotices",$param) and $param["HierarchicalNotices"] !== null) {
            $this->HierarchicalNotices = [];
            foreach ($param["HierarchicalNotices"] as $key => $value){
                $obj = new AlarmHierarchicalNotice();
                $obj->deserialize($value);
                array_push($this->HierarchicalNotices, $obj);
            }
        }
    }
}
