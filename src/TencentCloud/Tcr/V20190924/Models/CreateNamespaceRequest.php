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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNamespace request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getNamespaceName() Obtain Namespace name, which can contain 2–30 lowercase letters, digits, and separators (".", "_", and "-") but can neither start or end with a separator nor contain consecutive separators.
 * @method void setNamespaceName(string $NamespaceName) Set Namespace name, which can contain 2–30 lowercase letters, digits, and separators (".", "_", and "-") but can neither start or end with a separator nor contain consecutive separators.
 * @method boolean getIsPublic() Obtain Whether to make public. Valid values: true: Yes; false: No.
 * @method void setIsPublic(boolean $IsPublic) Set Whether to make public. Valid values: true: Yes; false: No.
 * @method TagSpecification getTagSpecification() Obtain Cloud tag description
 * @method void setTagSpecification(TagSpecification $TagSpecification) Set Cloud tag description
 */
class CreateNamespaceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Namespace name, which can contain 2–30 lowercase letters, digits, and separators (".", "_", and "-") but can neither start or end with a separator nor contain consecutive separators.
     */
    public $NamespaceName;

    /**
     * @var boolean Whether to make public. Valid values: true: Yes; false: No.
     */
    public $IsPublic;

    /**
     * @var TagSpecification Cloud tag description
     */
    public $TagSpecification;

    /**
     * @param string $RegistryId Instance ID
     * @param string $NamespaceName Namespace name, which can contain 2–30 lowercase letters, digits, and separators (".", "_", and "-") but can neither start or end with a separator nor contain consecutive separators.
     * @param boolean $IsPublic Whether to make public. Valid values: true: Yes; false: No.
     * @param TagSpecification $TagSpecification Cloud tag description
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = new TagSpecification();
            $this->TagSpecification->deserialize($param["TagSpecification"]);
        }
    }
}
