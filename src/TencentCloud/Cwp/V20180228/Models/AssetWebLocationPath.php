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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Virtual directory of the asset management web site
 *
 * @method string getVirtualPath() Obtain Virtual path
 * @method void setVirtualPath(string $VirtualPath) Set Virtual path
 * @method string getRealPath() Obtain Physical path
 * @method void setRealPath(string $RealPath) Set Physical path
 * @method string getUser() Obtain File owner
 * @method void setUser(string $User) Set File owner
 * @method string getGroup() Obtain File group
 * @method void setGroup(string $Group) Set File group
 * @method string getPermission() Obtain File permission
 * @method void setPermission(string $Permission) Set File permission
 */
class AssetWebLocationPath extends AbstractModel
{
    /**
     * @var string Virtual path
     */
    public $VirtualPath;

    /**
     * @var string Physical path
     */
    public $RealPath;

    /**
     * @var string File owner
     */
    public $User;

    /**
     * @var string File group
     */
    public $Group;

    /**
     * @var string File permission
     */
    public $Permission;

    /**
     * @param string $VirtualPath Virtual path
     * @param string $RealPath Physical path
     * @param string $User File owner
     * @param string $Group File group
     * @param string $Permission File permission
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
        if (array_key_exists("VirtualPath",$param) and $param["VirtualPath"] !== null) {
            $this->VirtualPath = $param["VirtualPath"];
        }

        if (array_key_exists("RealPath",$param) and $param["RealPath"] !== null) {
            $this->RealPath = $param["RealPath"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }
    }
}
