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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteMediaPackageChannels response structure.
 *
 * @method array getSuccessInfos() Obtain The information list of channels that have been deleted.
 * @method void setSuccessInfos(array $SuccessInfos) Set The information list of channels that have been deleted.
 * @method array getFailInfos() Obtain The information list of channels that failed to be deleted.
 * @method void setFailInfos(array $FailInfos) Set The information list of channels that failed to be deleted.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DeleteMediaPackageChannelsResponse extends AbstractModel
{
    /**
     * @var array The information list of channels that have been deleted.
     */
    public $SuccessInfos;

    /**
     * @var array The information list of channels that failed to be deleted.
     */
    public $FailInfos;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $SuccessInfos The information list of channels that have been deleted.
     * @param array $FailInfos The information list of channels that failed to be deleted.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("SuccessInfos",$param) and $param["SuccessInfos"] !== null) {
            $this->SuccessInfos = [];
            foreach ($param["SuccessInfos"] as $key => $value){
                $obj = new ChannelInfo();
                $obj->deserialize($value);
                array_push($this->SuccessInfos, $obj);
            }
        }

        if (array_key_exists("FailInfos",$param) and $param["FailInfos"] !== null) {
            $this->FailInfos = [];
            foreach ($param["FailInfos"] as $key => $value){
                $obj = new ChannelInfo();
                $obj->deserialize($value);
                array_push($this->FailInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
