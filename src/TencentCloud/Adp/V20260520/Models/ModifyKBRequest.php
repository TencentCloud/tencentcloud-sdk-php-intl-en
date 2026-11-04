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
 * ModifyKB request structure.
 *
 * @method string getKbId() Obtain <p>Knowledge base ID</p>
 * @method void setKbId(string $KbId) Set <p>Knowledge base ID</p>
 * @method KBSpec getSpec() Obtain <p>Writable attribute (use together with update_mask)</p>
 * @method void setSpec(KBSpec $Spec) Set <p>Writable attribute (use together with update_mask)</p>
 * @method FieldMask getUpdateMask() Obtain <p>Field mask: specify the field to be modified (snake-shaped field name). Unlisted fields are ignored</p>
 * @method void setUpdateMask(FieldMask $UpdateMask) Set <p>Field mask: specify the field to be modified (snake-shaped field name). Unlisted fields are ignored</p>
 * @method KBModifyExtendFields getExtendFields() Obtain <p>Scaling operation (for hosting special operations that cannot be categorized into regular field modification, such as triggering over-limit recovery. It is effective only when 'extend_fields' is also input in update_mask. For the value, refer to KBExtendedAction: 1=trigger over-limit recovery)</p>
 * @method void setExtendFields(KBModifyExtendFields $ExtendFields) Set <p>Scaling operation (for hosting special operations that cannot be categorized into regular field modification, such as triggering over-limit recovery. It is effective only when 'extend_fields' is also input in update_mask. For the value, refer to KBExtendedAction: 1=trigger over-limit recovery)</p>
 */
class ModifyKBRequest extends AbstractModel
{
    /**
     * @var string <p>Knowledge base ID</p>
     */
    public $KbId;

    /**
     * @var KBSpec <p>Writable attribute (use together with update_mask)</p>
     */
    public $Spec;

    /**
     * @var FieldMask <p>Field mask: specify the field to be modified (snake-shaped field name). Unlisted fields are ignored</p>
     */
    public $UpdateMask;

    /**
     * @var KBModifyExtendFields <p>Scaling operation (for hosting special operations that cannot be categorized into regular field modification, such as triggering over-limit recovery. It is effective only when 'extend_fields' is also input in update_mask. For the value, refer to KBExtendedAction: 1=trigger over-limit recovery)</p>
     */
    public $ExtendFields;

    /**
     * @param string $KbId <p>Knowledge base ID</p>
     * @param KBSpec $Spec <p>Writable attribute (use together with update_mask)</p>
     * @param FieldMask $UpdateMask <p>Field mask: specify the field to be modified (snake-shaped field name). Unlisted fields are ignored</p>
     * @param KBModifyExtendFields $ExtendFields <p>Scaling operation (for hosting special operations that cannot be categorized into regular field modification, such as triggering over-limit recovery. It is effective only when 'extend_fields' is also input in update_mask. For the value, refer to KBExtendedAction: 1=trigger over-limit recovery)</p>
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

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = new KBSpec();
            $this->Spec->deserialize($param["Spec"]);
        }

        if (array_key_exists("UpdateMask",$param) and $param["UpdateMask"] !== null) {
            $this->UpdateMask = new FieldMask();
            $this->UpdateMask->deserialize($param["UpdateMask"]);
        }

        if (array_key_exists("ExtendFields",$param) and $param["ExtendFields"] !== null) {
            $this->ExtendFields = new KBModifyExtendFields();
            $this->ExtendFields->deserialize($param["ExtendFields"]);
        }
    }
}
