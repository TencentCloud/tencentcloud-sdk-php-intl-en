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
 * QA operation permission information
 *
 * @method boolean getCanAccept() Obtain <p>Whether verification is supported (adoption/non-adoption).</p>
 * @method void setCanAccept(boolean $CanAccept) Set <p>Whether verification is supported (adoption/non-adoption).</p>
 * @method boolean getCanDelete() Obtain <p>Whether it is deletable.</p>
 * @method void setCanDelete(boolean $CanDelete) Set <p>Whether it is deletable.</p>
 * @method boolean getCanEdit() Obtain <p>Whether it is editable</p>
 * @method void setCanEdit(boolean $CanEdit) Set <p>Whether it is editable</p>
 */
class QAPermission extends AbstractModel
{
    /**
     * @var boolean <p>Whether verification is supported (adoption/non-adoption).</p>
     */
    public $CanAccept;

    /**
     * @var boolean <p>Whether it is deletable.</p>
     */
    public $CanDelete;

    /**
     * @var boolean <p>Whether it is editable</p>
     */
    public $CanEdit;

    /**
     * @param boolean $CanAccept <p>Whether verification is supported (adoption/non-adoption).</p>
     * @param boolean $CanDelete <p>Whether it is deletable.</p>
     * @param boolean $CanEdit <p>Whether it is editable</p>
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
        if (array_key_exists("CanAccept",$param) and $param["CanAccept"] !== null) {
            $this->CanAccept = $param["CanAccept"];
        }

        if (array_key_exists("CanDelete",$param) and $param["CanDelete"] !== null) {
            $this->CanDelete = $param["CanDelete"];
        }

        if (array_key_exists("CanEdit",$param) and $param["CanEdit"] !== null) {
            $this->CanEdit = $param["CanEdit"];
        }
    }
}
