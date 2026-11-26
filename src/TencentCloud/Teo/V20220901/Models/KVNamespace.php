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
 * KV namespace information, including the basic attributes, storage capacity utilization, and reference relationships of the namespace. A KV namespace is a container for edge functions to store key-value pair data, which can be read and written in edge functions through binding.
 *
 * @method string getNamespace() Obtain Namespace name. It is unique within the same site.
 * @method void setNamespace(string $Namespace) Set Namespace name. It is unique within the same site.
 * @method string getRemark() Obtain Namespace description. Remark information filled in upon creation, used to describe the purpose or business meaning of the namespace. Supports up to 256 characters.
 * @method void setRemark(string $Remark) Set Namespace description. Remark information filled in upon creation, used to describe the purpose or business meaning of the namespace. Supports up to 256 characters.
 * @method integer getCapacity() Obtain Available capacity of the KV storage space, in bytes. It indicates the maximum capacity limit of storable data in the namespace, which defaults to 1 GB.
 * @method void setCapacity(integer $Capacity) Set Available capacity of the KV storage space, in bytes. It indicates the maximum capacity limit of storable data in the namespace, which defaults to 1 GB.
 * @method integer getCapacityUsed() Obtain Used KV storage capacity in bytes. It indicates the currently used storage space size of the namespace.
 * @method void setCapacityUsed(integer $CapacityUsed) Set Used KV storage capacity in bytes. It indicates the currently used storage space size of the namespace.
 * @method array getReferences() Obtain List of instances that reference the namespace. Shows which edge function instances currently reference the namespace, as well as the site information of the references. If not referenced, return an empty array.
 * @method void setReferences(array $References) Set List of instances that reference the namespace. Shows which edge function instances currently reference the namespace, as well as the site information of the references. If not referenced, return an empty array.
 * @method string getCreatedOn() Obtain Namespace creation time in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ (UTC time).
 * @method void setCreatedOn(string $CreatedOn) Set Namespace creation time in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ (UTC time).
 * @method string getModifiedOn() Obtain Last modification time of the namespace, following the ISO 8601 standard, format: YYYY-MM-DDThh:mm:ssZ (UTC time).
 * @method void setModifiedOn(string $ModifiedOn) Set Last modification time of the namespace, following the ISO 8601 standard, format: YYYY-MM-DDThh:mm:ssZ (UTC time).
 */
class KVNamespace extends AbstractModel
{
    /**
     * @var string Namespace name. It is unique within the same site.
     */
    public $Namespace;

    /**
     * @var string Namespace description. Remark information filled in upon creation, used to describe the purpose or business meaning of the namespace. Supports up to 256 characters.
     */
    public $Remark;

    /**
     * @var integer Available capacity of the KV storage space, in bytes. It indicates the maximum capacity limit of storable data in the namespace, which defaults to 1 GB.
     */
    public $Capacity;

    /**
     * @var integer Used KV storage capacity in bytes. It indicates the currently used storage space size of the namespace.
     */
    public $CapacityUsed;

    /**
     * @var array List of instances that reference the namespace. Shows which edge function instances currently reference the namespace, as well as the site information of the references. If not referenced, return an empty array.
     */
    public $References;

    /**
     * @var string Namespace creation time in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ (UTC time).
     */
    public $CreatedOn;

    /**
     * @var string Last modification time of the namespace, following the ISO 8601 standard, format: YYYY-MM-DDThh:mm:ssZ (UTC time).
     */
    public $ModifiedOn;

    /**
     * @param string $Namespace Namespace name. It is unique within the same site.
     * @param string $Remark Namespace description. Remark information filled in upon creation, used to describe the purpose or business meaning of the namespace. Supports up to 256 characters.
     * @param integer $Capacity Available capacity of the KV storage space, in bytes. It indicates the maximum capacity limit of storable data in the namespace, which defaults to 1 GB.
     * @param integer $CapacityUsed Used KV storage capacity in bytes. It indicates the currently used storage space size of the namespace.
     * @param array $References List of instances that reference the namespace. Shows which edge function instances currently reference the namespace, as well as the site information of the references. If not referenced, return an empty array.
     * @param string $CreatedOn Namespace creation time in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ (UTC time).
     * @param string $ModifiedOn Last modification time of the namespace, following the ISO 8601 standard, format: YYYY-MM-DDThh:mm:ssZ (UTC time).
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
