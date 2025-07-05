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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyQAAttrRange request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method array getQaBizIds() Obtain Q&A ID.
 * @method void setQaBizIds(array $QaBizIds) Set Q&A ID.
 * @method integer getAttrRange() Obtain Applicable scope of attribute label: 1: all, 2: by conditions.
 * @method void setAttrRange(integer $AttrRange) Set Applicable scope of attribute label: 1: all, 2: by conditions.
 * @method array getAttrLabels() Obtain Attribute label reference.
 * @method void setAttrLabels(array $AttrLabels) Set Attribute label reference.
 */
class ModifyQAAttrRangeRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var array Q&A ID.
     */
    public $QaBizIds;

    /**
     * @var integer Applicable scope of attribute label: 1: all, 2: by conditions.
     */
    public $AttrRange;

    /**
     * @var array Attribute label reference.
     */
    public $AttrLabels;

    /**
     * @param string $BotBizId Application ID.
     * @param array $QaBizIds Q&A ID.
     * @param integer $AttrRange Applicable scope of attribute label: 1: all, 2: by conditions.
     * @param array $AttrLabels Attribute label reference.
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("QaBizIds",$param) and $param["QaBizIds"] !== null) {
            $this->QaBizIds = $param["QaBizIds"];
        }

        if (array_key_exists("AttrRange",$param) and $param["AttrRange"] !== null) {
            $this->AttrRange = $param["AttrRange"];
        }

        if (array_key_exists("AttrLabels",$param) and $param["AttrLabels"] !== null) {
            $this->AttrLabels = [];
            foreach ($param["AttrLabels"] as $key => $value){
                $obj = new AttrLabelRefer();
                $obj->deserialize($value);
                array_push($this->AttrLabels, $obj);
            }
        }
    }
}
