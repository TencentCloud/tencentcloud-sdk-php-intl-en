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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Compliance package rule information.
 *
 * @method string getIdentifier() Obtain <p>Rule ID.</p>
 * @method void setIdentifier(string $Identifier) Set <p>Rule ID.</p>
 * @method array getControl() Obtain <p>Rule number information.</p>
 * @method void setControl(array $Control) Set <p>Rule number information.</p>
 * @method array getResourceTypes() Obtain <p>Resource type.</p>
 * @method void setResourceTypes(array $ResourceTypes) Set <p>Resource type.</p>
 */
class CompliancePackRules extends AbstractModel
{
    /**
     * @var string <p>Rule ID.</p>
     */
    public $Identifier;

    /**
     * @var array <p>Rule number information.</p>
     */
    public $Control;

    /**
     * @var array <p>Resource type.</p>
     */
    public $ResourceTypes;

    /**
     * @param string $Identifier <p>Rule ID.</p>
     * @param array $Control <p>Rule number information.</p>
     * @param array $ResourceTypes <p>Resource type.</p>
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
        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("Control",$param) and $param["Control"] !== null) {
            $this->Control = [];
            foreach ($param["Control"] as $key => $value){
                $obj = new Control();
                $obj->deserialize($value);
                array_push($this->Control, $obj);
            }
        }

        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = $param["ResourceTypes"];
        }
    }
}
