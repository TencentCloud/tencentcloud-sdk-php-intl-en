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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input parameter type for media quality inspection.
 *
 * @method integer getDefinition() Obtain Media quality inspection template ID.
You can directly use a preset template or customize a template in the console. The preset templates are as follows:
- 10: Enable all quality inspection items.
- 20: Only enable quality inspection items corresponding to format diagnosis.
- 30: Only enable quality inspection items corresponding to no-reference scoring.
- 40: Only enable quality inspection items corresponding to screen quality.
 * @method void setDefinition(integer $Definition) Set Media quality inspection template ID.
You can directly use a preset template or customize a template in the console. The preset templates are as follows:
- 10: Enable all quality inspection items.
- 20: Only enable quality inspection items corresponding to format diagnosis.
- 30: Only enable quality inspection items corresponding to no-reference scoring.
- 40: Only enable quality inspection items corresponding to screen quality.
 * @method string getChannelExtPara() Obtain Channel expansion parameter, json serialized string.
 * @method void setChannelExtPara(string $ChannelExtPara) Set Channel expansion parameter, json serialized string.
 */
class AiQualityControlTaskInput extends AbstractModel
{
    /**
     * @var integer Media quality inspection template ID.
You can directly use a preset template or customize a template in the console. The preset templates are as follows:
- 10: Enable all quality inspection items.
- 20: Only enable quality inspection items corresponding to format diagnosis.
- 30: Only enable quality inspection items corresponding to no-reference scoring.
- 40: Only enable quality inspection items corresponding to screen quality.
     */
    public $Definition;

    /**
     * @var string Channel expansion parameter, json serialized string.
     */
    public $ChannelExtPara;

    /**
     * @param integer $Definition Media quality inspection template ID.
You can directly use a preset template or customize a template in the console. The preset templates are as follows:
- 10: Enable all quality inspection items.
- 20: Only enable quality inspection items corresponding to format diagnosis.
- 30: Only enable quality inspection items corresponding to no-reference scoring.
- 40: Only enable quality inspection items corresponding to screen quality.
     * @param string $ChannelExtPara Channel expansion parameter, json serialized string.
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ChannelExtPara",$param) and $param["ChannelExtPara"] !== null) {
            $this->ChannelExtPara = $param["ChannelExtPara"];
        }
    }
}
