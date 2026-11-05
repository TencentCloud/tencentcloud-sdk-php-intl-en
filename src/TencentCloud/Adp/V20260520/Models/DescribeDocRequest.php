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
 * DescribeDoc request structure.
 *
 * @method string getDocId() Obtain <p>Document ID</p>
 * @method void setDocId(string $DocId) Set <p>Document ID</p>
 * @method string getKbId() Obtain <p>ID of the knowledge base it belongs to</p>
 * @method void setKbId(string $KbId) Set <p>ID of the knowledge base it belongs to</p>
 * @method FieldMask getReadMask() Obtain <p>Field mask: Currently supported Path: DocLink.CosUrl. Other unlisted fields are returned by default.</p>
 * @method void setReadMask(FieldMask $ReadMask) Set <p>Field mask: Currently supported Path: DocLink.CosUrl. Other unlisted fields are returned by default.</p>
 */
class DescribeDocRequest extends AbstractModel
{
    /**
     * @var string <p>Document ID</p>
     */
    public $DocId;

    /**
     * @var string <p>ID of the knowledge base it belongs to</p>
     */
    public $KbId;

    /**
     * @var FieldMask <p>Field mask: Currently supported Path: DocLink.CosUrl. Other unlisted fields are returned by default.</p>
     */
    public $ReadMask;

    /**
     * @param string $DocId <p>Document ID</p>
     * @param string $KbId <p>ID of the knowledge base it belongs to</p>
     * @param FieldMask $ReadMask <p>Field mask: Currently supported Path: DocLink.CosUrl. Other unlisted fields are returned by default.</p>
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
        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("ReadMask",$param) and $param["ReadMask"] !== null) {
            $this->ReadMask = new FieldMask();
            $this->ReadMask->deserialize($param["ReadMask"]);
        }
    }
}
