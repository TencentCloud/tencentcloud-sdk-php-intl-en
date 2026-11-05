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
 * Rules regarding repeated files
 *
 * @method integer getCheckType() Obtain <p>Verification method: 1=determine whether they are identical based on document content<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DUPLICATE_FILE_CHECK_TYPE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>DUPLICATE_FILE_CHECK_TYPE_COS_HASH</td><td>1</td><td>Determine whether they are identical based on document content (cos_hash)</td></tr></tbody></table></p>
 * @method void setCheckType(integer $CheckType) Set <p>Verification method: 1=determine whether they are identical based on document content<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DUPLICATE_FILE_CHECK_TYPE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>DUPLICATE_FILE_CHECK_TYPE_COS_HASH</td><td>1</td><td>Determine whether they are identical based on document content (cos_hash)</td></tr></tbody></table></p>
 * @method integer getHandleType() Obtain <p>Processing method: 1=return an error, 2=skip and return the duplicate document ID<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DUPLICATE_FILE_HANDLE_TYPE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>DUPLICATE_FILE_HANDLE_TYPE_RETURN_ERR</td><td>1</td><td>Return an error</td></tr><tr><td>DUPLICATE_FILE_HANDLE_TYPE_SKIP</td><td>2</td><td>Skip and return the duplicate document ID</td></tr></tbody></table></p>
 * @method void setHandleType(integer $HandleType) Set <p>Processing method: 1=return an error, 2=skip and return the duplicate document ID<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DUPLICATE_FILE_HANDLE_TYPE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>DUPLICATE_FILE_HANDLE_TYPE_RETURN_ERR</td><td>1</td><td>Return an error</td></tr><tr><td>DUPLICATE_FILE_HANDLE_TYPE_SKIP</td><td>2</td><td>Skip and return the duplicate document ID</td></tr></tbody></table></p>
 */
class DeDuplicateStrategy extends AbstractModel
{
    /**
     * @var integer <p>Verification method: 1=determine whether they are identical based on document content<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DUPLICATE_FILE_CHECK_TYPE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>DUPLICATE_FILE_CHECK_TYPE_COS_HASH</td><td>1</td><td>Determine whether they are identical based on document content (cos_hash)</td></tr></tbody></table></p>
     */
    public $CheckType;

    /**
     * @var integer <p>Processing method: 1=return an error, 2=skip and return the duplicate document ID<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DUPLICATE_FILE_HANDLE_TYPE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>DUPLICATE_FILE_HANDLE_TYPE_RETURN_ERR</td><td>1</td><td>Return an error</td></tr><tr><td>DUPLICATE_FILE_HANDLE_TYPE_SKIP</td><td>2</td><td>Skip and return the duplicate document ID</td></tr></tbody></table></p>
     */
    public $HandleType;

    /**
     * @param integer $CheckType <p>Verification method: 1=determine whether they are identical based on document content<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DUPLICATE_FILE_CHECK_TYPE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>DUPLICATE_FILE_CHECK_TYPE_COS_HASH</td><td>1</td><td>Determine whether they are identical based on document content (cos_hash)</td></tr></tbody></table></p>
     * @param integer $HandleType <p>Processing method: 1=return an error, 2=skip and return the duplicate document ID<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DUPLICATE_FILE_HANDLE_TYPE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>DUPLICATE_FILE_HANDLE_TYPE_RETURN_ERR</td><td>1</td><td>Return an error</td></tr><tr><td>DUPLICATE_FILE_HANDLE_TYPE_SKIP</td><td>2</td><td>Skip and return the duplicate document ID</td></tr></tbody></table></p>
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
