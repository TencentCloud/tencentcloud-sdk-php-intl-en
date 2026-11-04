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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckLabel request structure.
 *
 * @method string getKbId() Obtain <p>ID of the knowledge base it belongs to</p>
 * @method void setKbId(string $KbId) Set <p>ID of the knowledge base it belongs to</p>
 * @method array getTermList() Obtain <p>List of standard words to be checked (quantity: 1–100)</p>
 * @method void setTermList(array $TermList) Set <p>List of standard words to be checked (quantity: 1–100)</p>
 * @method string getLabelId() Obtain <p>Tag ID (validates the uniqueness of standard terms under the specified tag)</p>
 * @method void setLabelId(string $LabelId) Set <p>Tag ID (validates the uniqueness of standard terms under the specified tag)</p>
 */
class CheckLabelRequest extends AbstractModel
{
    /**
     * @var string <p>ID of the knowledge base it belongs to</p>
     */
    public $KbId;

    /**
     * @var array <p>List of standard words to be checked (quantity: 1–100)</p>
     */
    public $TermList;

    /**
     * @var string <p>Tag ID (validates the uniqueness of standard terms under the specified tag)</p>
     */
    public $LabelId;

    /**
     * @param string $KbId <p>ID of the knowledge base it belongs to</p>
     * @param array $TermList <p>List of standard words to be checked (quantity: 1–100)</p>
     * @param string $LabelId <p>Tag ID (validates the uniqueness of standard terms under the specified tag)</p>
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
        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("TermList",$param) and $param["TermList"] !== null) {
            $this->TermList = $param["TermList"];
        }

        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }
    }
}
