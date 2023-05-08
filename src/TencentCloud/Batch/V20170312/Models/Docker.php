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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Docker container information
 *
 * @method string getUser() Obtain Docker Hub username or Tencent Registry username
 * @method void setUser(string $User) Set Docker Hub username or Tencent Registry username
 * @method string getPassword() Obtain Docker Hub password or Tencent Registry password
 * @method void setPassword(string $Password) Set Docker Hub password or Tencent Registry password
 * @method string getImage() Obtain For Docker Hub, enter "[user/repo]:[tag]"; for Tencent Registry, enter "ccr.ccs.tencentyun.com/[namespace/repo]:[tag]"
 * @method void setImage(string $Image) Set For Docker Hub, enter "[user/repo]:[tag]"; for Tencent Registry, enter "ccr.ccs.tencentyun.com/[namespace/repo]:[tag]"
 * @method string getServer() Obtain For Docker Hub, this can be left blank, but please ensure public network access is present. For Tencent Registry, the server address is "ccr.ccs.tencentyun.com"
 * @method void setServer(string $Server) Set For Docker Hub, this can be left blank, but please ensure public network access is present. For Tencent Registry, the server address is "ccr.ccs.tencentyun.com"
 * @method integer getMaxRetryCount() Obtain Maximum retry attempts to load docket images. Range: 0 - 10. Default: `0`
 * @method void setMaxRetryCount(integer $MaxRetryCount) Set Maximum retry attempts to load docket images. Range: 0 - 10. Default: `0`
 * @method integer getDelayOnRetry() Obtain Docker image loading timeout period (in seconds). Range: 1 - 360
 * @method void setDelayOnRetry(integer $DelayOnRetry) Set Docker image loading timeout period (in seconds). Range: 1 - 360
 * @method string getDockerRunOption() Obtain Docker command execution parameter
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setDockerRunOption(string $DockerRunOption) Set Docker command execution parameter
Note: This field may return `null`, indicating that no valid value was found.
 */
class Docker extends AbstractModel
{
    /**
     * @var string Docker Hub username or Tencent Registry username
     */
    public $User;

    /**
     * @var string Docker Hub password or Tencent Registry password
     */
    public $Password;

    /**
     * @var string For Docker Hub, enter "[user/repo]:[tag]"; for Tencent Registry, enter "ccr.ccs.tencentyun.com/[namespace/repo]:[tag]"
     */
    public $Image;

    /**
     * @var string For Docker Hub, this can be left blank, but please ensure public network access is present. For Tencent Registry, the server address is "ccr.ccs.tencentyun.com"
     */
    public $Server;

    /**
     * @var integer Maximum retry attempts to load docket images. Range: 0 - 10. Default: `0`
     */
    public $MaxRetryCount;

    /**
     * @var integer Docker image loading timeout period (in seconds). Range: 1 - 360
     */
    public $DelayOnRetry;

    /**
     * @var string Docker command execution parameter
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $DockerRunOption;

    /**
     * @param string $User Docker Hub username or Tencent Registry username
     * @param string $Password Docker Hub password or Tencent Registry password
     * @param string $Image For Docker Hub, enter "[user/repo]:[tag]"; for Tencent Registry, enter "ccr.ccs.tencentyun.com/[namespace/repo]:[tag]"
     * @param string $Server For Docker Hub, this can be left blank, but please ensure public network access is present. For Tencent Registry, the server address is "ccr.ccs.tencentyun.com"
     * @param integer $MaxRetryCount Maximum retry attempts to load docket images. Range: 0 - 10. Default: `0`
     * @param integer $DelayOnRetry Docker image loading timeout period (in seconds). Range: 1 - 360
     * @param string $DockerRunOption Docker command execution parameter
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("MaxRetryCount",$param) and $param["MaxRetryCount"] !== null) {
            $this->MaxRetryCount = $param["MaxRetryCount"];
        }

        if (array_key_exists("DelayOnRetry",$param) and $param["DelayOnRetry"] !== null) {
            $this->DelayOnRetry = $param["DelayOnRetry"];
        }

        if (array_key_exists("DockerRunOption",$param) and $param["DockerRunOption"] !== null) {
            $this->DockerRunOption = $param["DockerRunOption"];
        }
    }
}
