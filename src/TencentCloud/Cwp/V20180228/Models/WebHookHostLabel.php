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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Enterprise WeChat Robot Host Range
 *
 * @method integer getType() Obtain Host Range [1: Project |2: Tencent Cloud Tag | 3: Host Security Tag | 4: Optional] Empty array means all.
 * @method void setType(integer $Type) Set Host Range [1: Project |2: Tencent Cloud Tag | 3: Host Security Tag | 4: Optional] Empty array means all.
 * @method array getValues() Obtain Host Project or Tag Content
 * @method void setValues(array $Values) Set Host Project or Tag Content
 */
class WebHookHostLabel extends AbstractModel
{
    /**
     * @var integer Host Range [1: Project |2: Tencent Cloud Tag | 3: Host Security Tag | 4: Optional] Empty array means all.
     */
    public $Type;

    /**
     * @var array Host Project or Tag Content
     */
    public $Values;

    /**
     * @param integer $Type Host Range [1: Project |2: Tencent Cloud Tag | 3: Host Security Tag | 4: Optional] Empty array means all.
     * @param array $Values Host Project or Tag Content
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
