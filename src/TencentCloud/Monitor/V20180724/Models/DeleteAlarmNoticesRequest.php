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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAlarmNotices request structure.
 *
 * @method string getModule() Obtain Module name. Enter "monitor" here
 * @method void setModule(string $Module) Set Module name. Enter "monitor" here
 * @method array getNoticeIds() Obtain Alarm notification template ID list
 * @method void setNoticeIds(array $NoticeIds) Set Alarm notification template ID list
 * @method array getNoticeBindPolicys() Obtain Binding between a notification template and a policy
 * @method void setNoticeBindPolicys(array $NoticeBindPolicys) Set Binding between a notification template and a policy
 */
class DeleteAlarmNoticesRequest extends AbstractModel
{
    /**
     * @var string Module name. Enter "monitor" here
     */
    public $Module;

    /**
     * @var array Alarm notification template ID list
     */
    public $NoticeIds;

    /**
     * @var array Binding between a notification template and a policy
     */
    public $NoticeBindPolicys;

    /**
     * @param string $Module Module name. Enter "monitor" here
     * @param array $NoticeIds Alarm notification template ID list
     * @param array $NoticeBindPolicys Binding between a notification template and a policy
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

        if (array_key_exists("NoticeIds",$param) and $param["NoticeIds"] !== null) {
            $this->NoticeIds = $param["NoticeIds"];
        }

        if (array_key_exists("NoticeBindPolicys",$param) and $param["NoticeBindPolicys"] !== null) {
            $this->NoticeBindPolicys = [];
            foreach ($param["NoticeBindPolicys"] as $key => $value){
                $obj = new NoticeBindPolicys();
                $obj->deserialize($value);
                array_push($this->NoticeBindPolicys, $obj);
            }
        }
    }
}
