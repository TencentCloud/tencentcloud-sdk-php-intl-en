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
 * DescribePolicyConditionList.EventMetric
 *
 * @method integer getEventId() Obtain Event ID.
 * @method void setEventId(integer $EventId) Set Event ID.
 * @method string getEventShowName() Obtain Event name.
 * @method void setEventShowName(string $EventShowName) Set Event name.
 * @method boolean getNeedRecovered() Obtain Whether to recover.
 * @method void setNeedRecovered(boolean $NeedRecovered) Set Whether to recover.
 * @method integer getType() Obtain Event type, which is a reserved field. Currently, it is fixed to 2.
 * @method void setType(integer $Type) Set Event type, which is a reserved field. Currently, it is fixed to 2.
 */
class DescribePolicyConditionListEventMetric extends AbstractModel
{
    /**
     * @var integer Event ID.
     */
    public $EventId;

    /**
     * @var string Event name.
     */
    public $EventShowName;

    /**
     * @var boolean Whether to recover.
     */
    public $NeedRecovered;

    /**
     * @var integer Event type, which is a reserved field. Currently, it is fixed to 2.
     */
    public $Type;

    /**
     * @param integer $EventId Event ID.
     * @param string $EventShowName Event name.
     * @param boolean $NeedRecovered Whether to recover.
     * @param integer $Type Event type, which is a reserved field. Currently, it is fixed to 2.
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("EventShowName",$param) and $param["EventShowName"] !== null) {
            $this->EventShowName = $param["EventShowName"];
        }

        if (array_key_exists("NeedRecovered",$param) and $param["NeedRecovered"] !== null) {
            $this->NeedRecovered = $param["NeedRecovered"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
