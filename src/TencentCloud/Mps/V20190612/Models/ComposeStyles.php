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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The style information of a video editing/compositing task.
 *
 * @method string getId() Obtain The style ID, which identifies an element style.
Note: The style ID can be up to 32 characters long and can contain letters, digits, and special characters -_
 * @method void setId(string $Id) Set The style ID, which identifies an element style.
Note: The style ID can be up to 32 characters long and can contain letters, digits, and special characters -_
 * @method string getType() Obtain The type. Valid values:
<li>`Subtitle`: The subtitle style. </li>
 * @method void setType(string $Type) Set The type. Valid values:
<li>`Subtitle`: The subtitle style. </li>
 * @method ComposeSubtitleStyle getSubtitle() Obtain The subtitle style details. This parameter is valid if `Type` is `Subtitle`.
 * @method void setSubtitle(ComposeSubtitleStyle $Subtitle) Set The subtitle style details. This parameter is valid if `Type` is `Subtitle`.
 */
class ComposeStyles extends AbstractModel
{
    /**
     * @var string The style ID, which identifies an element style.
Note: The style ID can be up to 32 characters long and can contain letters, digits, and special characters -_
     */
    public $Id;

    /**
     * @var string The type. Valid values:
<li>`Subtitle`: The subtitle style. </li>
     */
    public $Type;

    /**
     * @var ComposeSubtitleStyle The subtitle style details. This parameter is valid if `Type` is `Subtitle`.
     */
    public $Subtitle;

    /**
     * @param string $Id The style ID, which identifies an element style.
Note: The style ID can be up to 32 characters long and can contain letters, digits, and special characters -_
     * @param string $Type The type. Valid values:
<li>`Subtitle`: The subtitle style. </li>
     * @param ComposeSubtitleStyle $Subtitle The subtitle style details. This parameter is valid if `Type` is `Subtitle`.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Subtitle",$param) and $param["Subtitle"] !== null) {
            $this->Subtitle = new ComposeSubtitleStyle();
            $this->Subtitle->deserialize($param["Subtitle"]);
        }
    }
}
