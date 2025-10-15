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
 * Explore data script business processing entity.
 *
 * @method string getCodeFileId() Obtain Script ID


 * @method void setCodeFileId(string $CodeFileId) Set Script ID


 * @method string getCodeFileName() Obtain Script name.

 * @method void setCodeFileName(string $CodeFileName) Set Script name.

 * @method string getOwnerUin() Obtain Specifies the script owner uin.

 * @method void setOwnerUin(string $OwnerUin) Set Specifies the script owner uin.

 * @method CodeFileConfig getCodeFileConfig() Obtain Specifies the script configuration.

 * @method void setCodeFileConfig(CodeFileConfig $CodeFileConfig) Set Specifies the script configuration.

 * @method string getCodeFileContent() Obtain Specifies the script content.

 * @method void setCodeFileContent(string $CodeFileContent) Set Specifies the script content.

 * @method string getUpdateUserUin() Obtain Latest operator.

 * @method void setUpdateUserUin(string $UpdateUserUin) Set Latest operator.

 * @method string getProjectId() Obtain Project ID.


 * @method void setProjectId(string $ProjectId) Set Project ID.


 * @method string getUpdateTime() Obtain Update time. format: yyyy-MM-dd hh:MM:ss.
Note: This field may return null, indicating that no valid 
 * @method void setUpdateTime(string $UpdateTime) Set Update time. format: yyyy-MM-dd hh:MM:ss.
Note: This field may return null, indicating that no valid 
 * @method string getCreateTime() Obtain Creation time. format: yyyy-MM-dd hh:MM:ss.

 * @method void setCreateTime(string $CreateTime) Set Creation time. format: yyyy-MM-dd hh:MM:ss.

 * @method string getAccessScope() Obtain Access permission: SHARED, PRIVATE.

 * @method void setAccessScope(string $AccessScope) Set Access permission: SHARED, PRIVATE.

 * @method string getPath() Obtain Full path of the node, /aaa/bbb/ccc.ipynb, consists of the name of each node.

 * @method void setPath(string $Path) Set Full path of the node, /aaa/bbb/ccc.ipynb, consists of the name of each node.
 */
class CodeFile extends AbstractModel
{
    /**
     * @var string Script ID


     */
    public $CodeFileId;

    /**
     * @var string Script name.

     */
    public $CodeFileName;

    /**
     * @var string Specifies the script owner uin.

     */
    public $OwnerUin;

    /**
     * @var CodeFileConfig Specifies the script configuration.

     */
    public $CodeFileConfig;

    /**
     * @var string Specifies the script content.

     */
    public $CodeFileContent;

    /**
     * @var string Latest operator.

     */
    public $UpdateUserUin;

    /**
     * @var string Project ID.


     */
    public $ProjectId;

    /**
     * @var string Update time. format: yyyy-MM-dd hh:MM:ss.
Note: This field may return null, indicating that no valid 
     */
    public $UpdateTime;

    /**
     * @var string Creation time. format: yyyy-MM-dd hh:MM:ss.

     */
    public $CreateTime;

    /**
     * @var string Access permission: SHARED, PRIVATE.

     */
    public $AccessScope;

    /**
     * @var string Full path of the node, /aaa/bbb/ccc.ipynb, consists of the name of each node.

     */
    public $Path;

    /**
     * @param string $CodeFileId Script ID


     * @param string $CodeFileName Script name.

     * @param string $OwnerUin Specifies the script owner uin.

     * @param CodeFileConfig $CodeFileConfig Specifies the script configuration.

     * @param string $CodeFileContent Specifies the script content.

     * @param string $UpdateUserUin Latest operator.

     * @param string $ProjectId Project ID.


     * @param string $UpdateTime Update time. format: yyyy-MM-dd hh:MM:ss.
Note: This field may return null, indicating that no valid 
     * @param string $CreateTime Creation time. format: yyyy-MM-dd hh:MM:ss.

     * @param string $AccessScope Access permission: SHARED, PRIVATE.

     * @param string $Path Full path of the node, /aaa/bbb/ccc.ipynb, consists of the name of each node.
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
        if (array_key_exists("CodeFileId",$param) and $param["CodeFileId"] !== null) {
            $this->CodeFileId = $param["CodeFileId"];
        }

        if (array_key_exists("CodeFileName",$param) and $param["CodeFileName"] !== null) {
            $this->CodeFileName = $param["CodeFileName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CodeFileConfig",$param) and $param["CodeFileConfig"] !== null) {
            $this->CodeFileConfig = new CodeFileConfig();
            $this->CodeFileConfig->deserialize($param["CodeFileConfig"]);
        }

        if (array_key_exists("CodeFileContent",$param) and $param["CodeFileContent"] !== null) {
            $this->CodeFileContent = $param["CodeFileContent"];
        }

        if (array_key_exists("UpdateUserUin",$param) and $param["UpdateUserUin"] !== null) {
            $this->UpdateUserUin = $param["UpdateUserUin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
