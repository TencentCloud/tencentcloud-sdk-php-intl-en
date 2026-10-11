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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * File node
 *
 * @method FileMeta getNode() Obtain <p>Current node</p>
 * @method void setNode(FileMeta $Node) Set <p>Current node</p>
 * @method FileMeta getParent() Obtain <p>Parent node</p>
 * @method void setParent(FileMeta $Parent) Set <p>Parent node</p>
 * @method UserInfo getCreator() Obtain <p>Creator</p>
 * @method void setCreator(UserInfo $Creator) Set <p>Creator</p>
 * @method UserInfo getOwner() Obtain <p>Owner</p>
 * @method void setOwner(UserInfo $Owner) Set <p>Owner</p>
 * @method string getNodeType() Obtain <p>Node type.</p>
 * @method void setNodeType(string $NodeType) Set <p>Node type.</p>
 * @method string getOriginPath() Obtain <p>Original path</p>
 * @method void setOriginPath(string $OriginPath) Set <p>Original path</p>
 * @method string getDeleteTime() Obtain <p>Recycle time</p>
 * @method void setDeleteTime(string $DeleteTime) Set <p>Recycle time</p>
 * @method GitRepoConfig getGitConfig() Obtain <p>File git configuration.</p>
 * @method void setGitConfig(GitRepoConfig $GitConfig) Set <p>File git configuration.</p>
 */
class FileNode extends AbstractModel
{
    /**
     * @var FileMeta <p>Current node</p>
     */
    public $Node;

    /**
     * @var FileMeta <p>Parent node</p>
     */
    public $Parent;

    /**
     * @var UserInfo <p>Creator</p>
     */
    public $Creator;

    /**
     * @var UserInfo <p>Owner</p>
     */
    public $Owner;

    /**
     * @var string <p>Node type.</p>
     */
    public $NodeType;

    /**
     * @var string <p>Original path</p>
     */
    public $OriginPath;

    /**
     * @var string <p>Recycle time</p>
     */
    public $DeleteTime;

    /**
     * @var GitRepoConfig <p>File git configuration.</p>
     */
    public $GitConfig;

    /**
     * @param FileMeta $Node <p>Current node</p>
     * @param FileMeta $Parent <p>Parent node</p>
     * @param UserInfo $Creator <p>Creator</p>
     * @param UserInfo $Owner <p>Owner</p>
     * @param string $NodeType <p>Node type.</p>
     * @param string $OriginPath <p>Original path</p>
     * @param string $DeleteTime <p>Recycle time</p>
     * @param GitRepoConfig $GitConfig <p>File git configuration.</p>
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
        if (array_key_exists("Node",$param) and $param["Node"] !== null) {
            $this->Node = new FileMeta();
            $this->Node->deserialize($param["Node"]);
        }

        if (array_key_exists("Parent",$param) and $param["Parent"] !== null) {
            $this->Parent = new FileMeta();
            $this->Parent->deserialize($param["Parent"]);
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = new UserInfo();
            $this->Creator->deserialize($param["Creator"]);
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new UserInfo();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("OriginPath",$param) and $param["OriginPath"] !== null) {
            $this->OriginPath = $param["OriginPath"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("GitConfig",$param) and $param["GitConfig"] !== null) {
            $this->GitConfig = new GitRepoConfig();
            $this->GitConfig->deserialize($param["GitConfig"]);
        }
    }
}
