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
 * 
 *
 * @method integer getIndex() Obtain 
 * @method void setIndex(integer $Index) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method integer getType() Obtain 
 * @method void setType(integer $Type) Set 
 * @method DocReference getDocRefer() Obtain 
 * @method void setDocRefer(DocReference $DocRefer) Set 
 * @method QaReference getQaRefer() Obtain 
 * @method void setQaRefer(QaReference $QaRefer) Set 
 * @method WebSearchReference getWebSearchRefer() Obtain 
 * @method void setWebSearchRefer(WebSearchReference $WebSearchRefer) Set 
 */
class ContentReference extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Index;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var integer 
     */
    public $Type;

    /**
     * @var DocReference 
     */
    public $DocRefer;

    /**
     * @var QaReference 
     */
    public $QaRefer;

    /**
     * @var WebSearchReference 
     */
    public $WebSearchRefer;

    /**
     * @param integer $Index 
     * @param string $Name 
     * @param integer $Type 
     * @param DocReference $DocRefer 
     * @param QaReference $QaRefer 
     * @param WebSearchReference $WebSearchRefer 
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DocRefer",$param) and $param["DocRefer"] !== null) {
            $this->DocRefer = new DocReference();
            $this->DocRefer->deserialize($param["DocRefer"]);
        }

        if (array_key_exists("QaRefer",$param) and $param["QaRefer"] !== null) {
            $this->QaRefer = new QaReference();
            $this->QaRefer->deserialize($param["QaRefer"]);
        }

        if (array_key_exists("WebSearchRefer",$param) and $param["WebSearchRefer"] !== null) {
            $this->WebSearchRefer = new WebSearchReference();
            $this->WebSearchRefer->deserialize($param["WebSearchRefer"]);
        }
    }
}
