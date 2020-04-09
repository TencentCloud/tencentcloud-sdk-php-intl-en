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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dead letter queue parameter
 *
 * @method string getType() Obtain Dead letter queue mode
 * @method void setType(string $Type) Set Dead letter queue mode
 * @method string getName() Obtain Dead letter queue name
 * @method void setName(string $Name) Set Dead letter queue name
 * @method string getFilterType() Obtain Tag form of a dead letter queue topic mode
 * @method void setFilterType(string $FilterType) Set Tag form of a dead letter queue topic mode
 */
class DeadLetterConfig extends AbstractModel
{
    /**
     * @var string Dead letter queue mode
     */
    public $Type;

    /**
     * @var string Dead letter queue name
     */
    public $Name;

    /**
     * @var string Tag form of a dead letter queue topic mode
     */
    public $FilterType;

    /**
     * @param string $Type Dead letter queue mode
     * @param string $Name Dead letter queue name
     * @param string $FilterType Tag form of a dead letter queue topic mode
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }
    }
}
