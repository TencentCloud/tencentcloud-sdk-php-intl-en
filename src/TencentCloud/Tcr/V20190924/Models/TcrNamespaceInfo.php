<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * TCR namespace description
 *
 * @method string getName() Obtain Namespace name
 * @method void setName(string $Name) Set Namespace name
 * @method string getCreationTime() Obtain Creation time
 * @method void setCreationTime(string $CreationTime) Set Creation time
 * @method boolean getPublic() Obtain Access level
 * @method void setPublic(boolean $Public) Set Access level
 * @method integer getNamespaceId() Obtain Namespace ID
 * @method void setNamespaceId(integer $NamespaceId) Set Namespace ID
 * @method TagSpecification getTagSpecification() Obtain Cloud tag of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagSpecification(TagSpecification $TagSpecification) Set Cloud tag of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMetadata() Obtain Namespace metadata
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetadata(array $Metadata) Set Namespace metadata
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TcrNamespaceInfo extends AbstractModel
{
    /**
     * @var string Namespace name
     */
    public $Name;

    /**
     * @var string Creation time
     */
    public $CreationTime;

    /**
     * @var boolean Access level
     */
    public $Public;

    /**
     * @var integer Namespace ID
     */
    public $NamespaceId;

    /**
     * @var TagSpecification Cloud tag of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagSpecification;

    /**
     * @var array Namespace metadata
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Metadata;

    /**
     * @param string $Name Namespace name
     * @param string $CreationTime Creation time
     * @param boolean $Public Access level
     * @param integer $NamespaceId Namespace ID
     * @param TagSpecification $TagSpecification Cloud tag of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Metadata Namespace metadata
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("Public",$param) and $param["Public"] !== null) {
            $this->Public = $param["Public"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = new TagSpecification();
            $this->TagSpecification->deserialize($param["TagSpecification"]);
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = [];
            foreach ($param["Metadata"] as $key => $value){
                $obj = new KeyValueString();
                $obj->deserialize($value);
                array_push($this->Metadata, $obj);
            }
        }
    }
}
