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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Git information
 *
 * @method string getGitHttpPath() Obtain Git URL
 * @method void setGitHttpPath(string $GitHttpPath) Set Git URL
 * @method string getGitUserName() Obtain Git username .
 * @method void setGitUserName(string $GitUserName) Set Git username .
 * @method string getGitTokenOrPassword() Obtain Git password or Token
 * @method void setGitTokenOrPassword(string $GitTokenOrPassword) Set Git password or Token
 * @method string getBranch() Obtain Branch
 * @method void setBranch(string $Branch) Set Branch
 * @method string getTag() Obtain Tag
 * @method void setTag(string $Tag) Set Tag
 */
class GitInfo extends AbstractModel
{
    /**
     * @var string Git URL
     */
    public $GitHttpPath;

    /**
     * @var string Git username .
     */
    public $GitUserName;

    /**
     * @var string Git password or Token
     */
    public $GitTokenOrPassword;

    /**
     * @var string Branch
     */
    public $Branch;

    /**
     * @var string Tag
     */
    public $Tag;

    /**
     * @param string $GitHttpPath Git URL
     * @param string $GitUserName Git username .
     * @param string $GitTokenOrPassword Git password or Token
     * @param string $Branch Branch
     * @param string $Tag Tag
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
        if (array_key_exists("GitHttpPath",$param) and $param["GitHttpPath"] !== null) {
            $this->GitHttpPath = $param["GitHttpPath"];
        }

        if (array_key_exists("GitUserName",$param) and $param["GitUserName"] !== null) {
            $this->GitUserName = $param["GitUserName"];
        }

        if (array_key_exists("GitTokenOrPassword",$param) and $param["GitTokenOrPassword"] !== null) {
            $this->GitTokenOrPassword = $param["GitTokenOrPassword"];
        }

        if (array_key_exists("Branch",$param) and $param["Branch"] !== null) {
            $this->Branch = $param["Branch"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
