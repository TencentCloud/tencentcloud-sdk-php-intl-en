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
 * Session content reference information
 *
 * @method integer getIndex() Obtain Source index ID
 * @method void setIndex(integer $Index) Set Source index ID
 * @method string getName() Obtain Reference source name
 * @method void setName(string $Name) Set Reference source name
 * @method integer getType() Obtain Reference source type
1: QA
2: Document fragment
4: Online retrieved content
 * @method void setType(integer $Type) Set Reference source type
1: QA
2: Document fragment
4: Online retrieved content
 * @method DocReference getDocRefer() Obtain Document fragment reference
 * @method void setDocRefer(DocReference $DocRefer) Set Document fragment reference
 * @method QaReference getQaRefer() Obtain QA reference
 * @method void setQaRefer(QaReference $QaRefer) Set QA reference
 * @method WebSearchReference getWebSearchRefer() Obtain Reference information for online retrieval content
 * @method void setWebSearchRefer(WebSearchReference $WebSearchRefer) Set Reference information for online retrieval content
 */
class ContentReference extends AbstractModel
{
    /**
     * @var integer Source index ID
     */
    public $Index;

    /**
     * @var string Reference source name
     */
    public $Name;

    /**
     * @var integer Reference source type
1: QA
2: Document fragment
4: Online retrieved content
     */
    public $Type;

    /**
     * @var DocReference Document fragment reference
     */
    public $DocRefer;

    /**
     * @var QaReference QA reference
     */
    public $QaRefer;

    /**
     * @var WebSearchReference Reference information for online retrieval content
     */
    public $WebSearchRefer;

    /**
     * @param integer $Index Source index ID
     * @param string $Name Reference source name
     * @param integer $Type Reference source type
1: QA
2: Document fragment
4: Online retrieved content
     * @param DocReference $DocRefer Document fragment reference
     * @param QaReference $QaRefer QA reference
     * @param WebSearchReference $WebSearchRefer Reference information for online retrieval content
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
