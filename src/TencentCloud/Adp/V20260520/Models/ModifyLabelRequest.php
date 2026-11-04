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
 * ModifyLabel request structure.
 *
 * @method LabelModifyFields getFields() Obtain <p>Modify field contents (required, use together with update_mask)</p>
 * @method void setFields(LabelModifyFields $Fields) Set <p>Modify field contents (required, use together with update_mask)</p>
 * @method string getKbId() Obtain <p>Associated knowledge base ID</p>
 * @method void setKbId(string $KbId) Set <p>Associated knowledge base ID</p>
 * @method string getLabelId() Obtain <p>ID of the tag to be modified</p>
 * @method void setLabelId(string $LabelId) Set <p>ID of the tag to be modified</p>
 * @method FieldMask getUpdateMask() Obtain <p>Field mask: specifies the fields to be modified (supported Paths: Name, TermModifyList)</p>
 * @method void setUpdateMask(FieldMask $UpdateMask) Set <p>Field mask: specifies the fields to be modified (supported Paths: Name, TermModifyList)</p>
 */
class ModifyLabelRequest extends AbstractModel
{
    /**
     * @var LabelModifyFields <p>Modify field contents (required, use together with update_mask)</p>
     */
    public $Fields;

    /**
     * @var string <p>Associated knowledge base ID</p>
     */
    public $KbId;

    /**
     * @var string <p>ID of the tag to be modified</p>
     */
    public $LabelId;

    /**
     * @var FieldMask <p>Field mask: specifies the fields to be modified (supported Paths: Name, TermModifyList)</p>
     */
    public $UpdateMask;

    /**
     * @param LabelModifyFields $Fields <p>Modify field contents (required, use together with update_mask)</p>
     * @param string $KbId <p>Associated knowledge base ID</p>
     * @param string $LabelId <p>ID of the tag to be modified</p>
     * @param FieldMask $UpdateMask <p>Field mask: specifies the fields to be modified (supported Paths: Name, TermModifyList)</p>
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
        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = new LabelModifyFields();
            $this->Fields->deserialize($param["Fields"]);
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("UpdateMask",$param) and $param["UpdateMask"] !== null) {
            $this->UpdateMask = new FieldMask();
            $this->UpdateMask->deserialize($param["UpdateMask"]);
        }
    }
}
