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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Field style configuration
 *
 * @method string getType() Obtain <p>Type.</p>
 * @method void setType(string $Type) Set <p>Type.</p>
 * @method boolean getCopy() Obtain <p>Whether copying is supported</p>
 * @method void setCopy(boolean $Copy) Set <p>Whether copying is supported</p>
 * @method string getColor() Obtain <p>Color</p>
 * @method void setColor(string $Color) Set <p>Color</p>
 * @method string getURL() Obtain <p>Redirect url</p>
 * @method void setURL(string $URL) Set <p>Redirect url</p>
 */
class FieldStyle extends AbstractModel
{
    /**
     * @var string <p>Type.</p>
     */
    public $Type;

    /**
     * @var boolean <p>Whether copying is supported</p>
     */
    public $Copy;

    /**
     * @var string <p>Color</p>
     */
    public $Color;

    /**
     * @var string <p>Redirect url</p>
     */
    public $URL;

    /**
     * @param string $Type <p>Type.</p>
     * @param boolean $Copy <p>Whether copying is supported</p>
     * @param string $Color <p>Color</p>
     * @param string $URL <p>Redirect url</p>
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

        if (array_key_exists("Copy",$param) and $param["Copy"] !== null) {
            $this->Copy = $param["Copy"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }
    }
}
