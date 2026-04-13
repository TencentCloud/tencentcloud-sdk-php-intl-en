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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Modification details of one parameter
 *
 * @method string getParamName() Obtain Parameter name.
 * @method void setParamName(string $ParamName) Set Parameter name.
 * @method integer getEventCount() Obtain Number of modified events.
 * @method void setEventCount(integer $EventCount) Set Number of modified events.
 * @method array getEventDetail() Obtain Last modification time.
 * @method void setEventDetail(array $EventDetail) Set Last modification time.
 */
class EventItem extends AbstractModel
{
    /**
     * @var string Parameter name.
     */
    public $ParamName;

    /**
     * @var integer Number of modified events.
     */
    public $EventCount;

    /**
     * @var array Last modification time.
     */
    public $EventDetail;

    /**
     * @param string $ParamName Parameter name.
     * @param integer $EventCount Number of modified events.
     * @param array $EventDetail Last modification time.
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
