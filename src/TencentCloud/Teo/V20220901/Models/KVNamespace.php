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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KV namespace information, including namespace basic attribute, capacity utilization and reference relationship. KV namespace is a container for edge function to store key-value pair data. It supports read-write operation in edge function through binding method.
 *
 * @method string getNamespace() Obtain Namespace name. Has uniqueness in the same site.
 * @method void setNamespace(string $Namespace) Set Namespace name. Has uniqueness in the same site.
 * @method string getRemark() Obtain Namespace description. Remark information filled in upon creation, used for explaining the purpose or business meaning of the namespace. Supports a maximum of 256 characters.
 * @method void setRemark(string $Remark) Set Namespace description. Remark information filled in upon creation, used for explaining the purpose or business meaning of the namespace. Supports a maximum of 256 characters.
 * @method integer getCapacity() Obtain Available capacity of KV storage space in bytes. It indicates the maximum capacity limit of storable data in namespace, defaulting to 1 GB.
 * @method void setCapacity(integer $Capacity) Set Available capacity of KV storage space in bytes. It indicates the maximum capacity limit of storable data in namespace, defaulting to 1 GB.
 * @method integer getCapacityUsed() Obtain KV storage space used capacity in bytes (Byte). It indicates the currently used storage space size of the namespace.
 * @method void setCapacityUsed(integer $CapacityUsed) Set KV storage space used capacity in bytes (Byte). It indicates the currently used storage space size of the namespace.
 * @method array getReferences() Obtain List of referenced instances in the namespace. Shows which edge function instances reference the current namespace and the site information referenced. Returns an empty array if not referenced.
 * @method void setReferences(array $References) Set List of referenced instances in the namespace. Shows which edge function instances reference the current namespace and the site information referenced. Returns an empty array if not referenced.
 * @method string getCreatedOn() Obtain The creation time of the namespace follows the ISO 8601 standard in the format YYYY-MM-DDThh:mm:ssZ (UTC time).
 * @method void setCreatedOn(string $CreatedOn) Set The creation time of the namespace follows the ISO 8601 standard in the format YYYY-MM-DDThh:mm:ssZ (UTC time).
 * @method string getModifiedOn() Obtain The last modification time of the namespace follows the ISO 8601 standard in the format YYYY-MM-DDThh:mm:ssZ (UTC time).
 * @method void setModifiedOn(string $ModifiedOn) Set The last modification time of the namespace follows the ISO 8601 standard in the format YYYY-MM-DDThh:mm:ssZ (UTC time).
 */
class KVNamespace extends AbstractModel
{
    /**
     * @var string Namespace name. Has uniqueness in the same site.
     */
    public $Namespace;

    /**
     * @var string Namespace description. Remark information filled in upon creation, used for explaining the purpose or business meaning of the namespace. Supports a maximum of 256 characters.
     */
    public $Remark;

    /**
     * @var integer Available capacity of KV storage space in bytes. It indicates the maximum capacity limit of storable data in namespace, defaulting to 1 GB.
     */
    public $Capacity;

    /**
     * @var integer KV storage space used capacity in bytes (Byte). It indicates the currently used storage space size of the namespace.
     */
    public $CapacityUsed;

    /**
     * @var array List of referenced instances in the namespace. Shows which edge function instances reference the current namespace and the site information referenced. Returns an empty array if not referenced.
     */
    public $References;

    /**
     * @var string The creation time of the namespace follows the ISO 8601 standard in the format YYYY-MM-DDThh:mm:ssZ (UTC time).
     */
    public $CreatedOn;

    /**
     * @var string The last modification time of the namespace follows the ISO 8601 standard in the format YYYY-MM-DDThh:mm:ssZ (UTC time).
     */
    public $ModifiedOn;

    /**
     * @param string $Namespace Namespace name. Has uniqueness in the same site.
     * @param string $Remark Namespace description. Remark information filled in upon creation, used for explaining the purpose or business meaning of the namespace. Supports a maximum of 256 characters.
     * @param integer $Capacity Available capacity of KV storage space in bytes. It indicates the maximum capacity limit of storable data in namespace, defaulting to 1 GB.
     * @param integer $CapacityUsed KV storage space used capacity in bytes (Byte). It indicates the currently used storage space size of the namespace.
     * @param array $References List of referenced instances in the namespace. Shows which edge function instances reference the current namespace and the site information referenced. Returns an empty array if not referenced.
     * @param string $CreatedOn The creation time of the namespace follows the ISO 8601 standard in the format YYYY-MM-DDThh:mm:ssZ (UTC time).
     * @param string $ModifiedOn The last modification time of the namespace follows the ISO 8601 standard in the format YYYY-MM-DDThh:mm:ssZ (UTC time).
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }

        if (array_key_exists("CapacityUsed",$param) and $param["CapacityUsed"] !== null) {
            $this->CapacityUsed = $param["CapacityUsed"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new ComponentReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }
    }
}
