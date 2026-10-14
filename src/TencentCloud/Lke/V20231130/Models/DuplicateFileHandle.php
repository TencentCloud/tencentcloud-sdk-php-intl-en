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
 * Processing method for duplicate documents
 *
 * @method integer getCheckType() Obtain Document repetition judgment method. 1: Judge whether to repeat by document content, that is, the cos_hash field.
 * @method void setCheckType(integer $CheckType) Set Document repetition judgment method. 1: Judge whether to repeat by document content, that is, the cos_hash field.
 * @method integer getHandleType() Obtain Duplicate document processing method. 1: return an error. 2: skip and return the business ID of the duplicate document.
 * @method void setHandleType(integer $HandleType) Set Duplicate document processing method. 1: return an error. 2: skip and return the business ID of the duplicate document.
 */
class DuplicateFileHandle extends AbstractModel
{
    /**
     * @var integer Document repetition judgment method. 1: Judge whether to repeat by document content, that is, the cos_hash field.
     */
    public $CheckType;

    /**
     * @var integer Duplicate document processing method. 1: return an error. 2: skip and return the business ID of the duplicate document.
     */
    public $HandleType;

    /**
     * @param integer $CheckType Document repetition judgment method. 1: Judge whether to repeat by document content, that is, the cos_hash field.
     * @param integer $HandleType Duplicate document processing method. 1: return an error. 2: skip and return the business ID of the duplicate document.
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
        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("HandleType",$param) and $param["HandleType"] !== null) {
            $this->HandleType = $param["HandleType"];
        }
    }
}
