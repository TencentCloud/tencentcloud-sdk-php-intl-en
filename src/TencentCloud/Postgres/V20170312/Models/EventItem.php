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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Modification details of one parameter
 *
 * @method string getParamName() Obtain Parameter name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setParamName(string $ParamName) Set Parameter name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getEventCount() Obtain The number of modification events
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEventCount(integer $EventCount) Set The number of modification events
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getEventDetail() Obtain Modification event details
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEventDetail(array $EventDetail) Set Modification event details
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class EventItem extends AbstractModel
{
    /**
     * @var string Parameter name
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ParamName;

    /**
     * @var integer The number of modification events
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $EventCount;

    /**
     * @var array Modification event details
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $EventDetail;

    /**
     * @param string $ParamName Parameter name
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $EventCount The number of modification events
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $EventDetail Modification event details
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("EventDetail",$param) and $param["EventDetail"] !== null) {
            $this->EventDetail = [];
            foreach ($param["EventDetail"] as $key => $value){
                $obj = new EventInfo();
                $obj->deserialize($value);
                array_push($this->EventDetail, $obj);
            }
        }
    }
}
