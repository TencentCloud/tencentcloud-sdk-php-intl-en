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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAigcCustomElement request structure.
 *
 * @method string getElementName() Obtain 
 * @method void setElementName(string $ElementName) Set 
 * @method string getElementDescription() Obtain 
 * @method void setElementDescription(string $ElementDescription) Set 
 * @method string getElementFrontalImage() Obtain 
 * @method void setElementFrontalImage(string $ElementFrontalImage) Set 
 * @method array getElementReferList() Obtain 
 * @method void setElementReferList(array $ElementReferList) Set 
 */
class CreateAigcCustomElementRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $ElementName;

    /**
     * @var string 
     */
    public $ElementDescription;

    /**
     * @var string 
     */
    public $ElementFrontalImage;

    /**
     * @var array 
     */
    public $ElementReferList;

    /**
     * @param string $ElementName 
     * @param string $ElementDescription 
     * @param string $ElementFrontalImage 
     * @param array $ElementReferList 
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
        if (array_key_exists("ElementName",$param) and $param["ElementName"] !== null) {
            $this->ElementName = $param["ElementName"];
        }

        if (array_key_exists("ElementDescription",$param) and $param["ElementDescription"] !== null) {
            $this->ElementDescription = $param["ElementDescription"];
        }

        if (array_key_exists("ElementFrontalImage",$param) and $param["ElementFrontalImage"] !== null) {
            $this->ElementFrontalImage = $param["ElementFrontalImage"];
        }

        if (array_key_exists("ElementReferList",$param) and $param["ElementReferList"] !== null) {
            $this->ElementReferList = [];
            foreach ($param["ElementReferList"] as $key => $value){
                $obj = new ElementReferInfo();
                $obj->deserialize($value);
                array_push($this->ElementReferList, $obj);
            }
        }
    }
}
