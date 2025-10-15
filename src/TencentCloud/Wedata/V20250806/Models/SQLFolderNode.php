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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SQL script file tree node.
 *
 * @method string getId() Obtain Unique identifier


 * @method void setId(string $Id) Set Unique identifier


 * @method string getName() Obtain Name

 * @method void setName(string $Name) Set Name

 * @method string getType() Obtain folder type, script type.

 * @method void setType(string $Type) Set folder type, script type.

 * @method string getParentFolderPath() Obtain Parent folder path, such as /aaa/bbb/ccc. the path must start with a slash. use / for the root directory.

 * @method void setParentFolderPath(string $ParentFolderPath) Set Parent folder path, such as /aaa/bbb/ccc. the path must start with a slash. use / for the root directory.

 * @method boolean getIsLeaf() Obtain Whether it is a leaf node.


 * @method void setIsLeaf(boolean $IsLeaf) Set Whether it is a leaf node.


 * @method string getParams() Obtain Business parameters	

 * @method void setParams(string $Params) Set Business parameters	

 * @method string getAccessScope() Obtain Permission scope: SHARED, PRIVATE.

 * @method void setAccessScope(string $AccessScope) Set Permission scope: SHARED, PRIVATE.

 * @method string getPath() Obtain Node path.

 * @method void setPath(string $Path) Set Node path.

 * @method string getCreateUserUin() Obtain Creator

 * @method void setCreateUserUin(string $CreateUserUin) Set Creator

 * @method string getNodePermission() Obtain Specifies the permission of the current user for nodes.	

 * @method void setNodePermission(string $NodePermission) Set Specifies the permission of the current user for nodes.	

 * @method array getChildren() Obtain Sub-node list

 * @method void setChildren(array $Children) Set Sub-node list

 * @method string getOwnerUin() Obtain Owner of the file.

 * @method void setOwnerUin(string $OwnerUin) Set Owner of the file.
 */
class SQLFolderNode extends AbstractModel
{
    /**
     * @var string Unique identifier


     */
    public $Id;

    /**
     * @var string Name

     */
    public $Name;

    /**
     * @var string folder type, script type.

     */
    public $Type;

    /**
     * @var string Parent folder path, such as /aaa/bbb/ccc. the path must start with a slash. use / for the root directory.

     */
    public $ParentFolderPath;

    /**
     * @var boolean Whether it is a leaf node.


     */
    public $IsLeaf;

    /**
     * @var string Business parameters	

     */
    public $Params;

    /**
     * @var string Permission scope: SHARED, PRIVATE.

     */
    public $AccessScope;

    /**
     * @var string Node path.

     */
    public $Path;

    /**
     * @var string Creator

     */
    public $CreateUserUin;

    /**
     * @var string Specifies the permission of the current user for nodes.	

     */
    public $NodePermission;

    /**
     * @var array Sub-node list

     */
    public $Children;

    /**
     * @var string Owner of the file.

     */
    public $OwnerUin;

    /**
     * @param string $Id Unique identifier


     * @param string $Name Name

     * @param string $Type folder type, script type.

     * @param string $ParentFolderPath Parent folder path, such as /aaa/bbb/ccc. the path must start with a slash. use / for the root directory.

     * @param boolean $IsLeaf Whether it is a leaf node.


     * @param string $Params Business parameters	

     * @param string $AccessScope Permission scope: SHARED, PRIVATE.

     * @param string $Path Node path.

     * @param string $CreateUserUin Creator

     * @param string $NodePermission Specifies the permission of the current user for nodes.	

     * @param array $Children Sub-node list

     * @param string $OwnerUin Owner of the file.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("NodePermission",$param) and $param["NodePermission"] !== null) {
            $this->NodePermission = $param["NodePermission"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new SQLFolderNode();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
