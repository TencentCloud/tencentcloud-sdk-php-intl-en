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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Option for the Pod toleration scheduling node.
 *
 * @method integer getWeight() Obtain Weight. Value range: 1–100.
 * @method void setWeight(integer $Weight) Set Weight. Value range: 1–100.
 * @method NodeSelectorTerm getPreference() Obtain Node selection expression.
 * @method void setPreference(NodeSelectorTerm $Preference) Set Node selection expression.
 */
class PreferredSchedulingTerm extends AbstractModel
{
    /**
     * @var integer Weight. Value range: 1–100.
     */
    public $Weight;

    /**
     * @var NodeSelectorTerm Node selection expression.
     */
    public $Preference;

    /**
     * @param integer $Weight Weight. Value range: 1–100.
     * @param NodeSelectorTerm $Preference Node selection expression.
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
        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Preference",$param) and $param["Preference"] !== null) {
            $this->Preference = new NodeSelectorTerm();
            $this->Preference->deserialize($param["Preference"]);
        }
    }
}
