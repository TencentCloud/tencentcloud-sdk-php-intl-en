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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationPods request structure.
 *
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method integer getLimit() Obtain Number of items per page. Default value: 20
 * @method void setLimit(integer $Limit) Set Number of items per page. Default value: 20
 * @method integer getOffset() Obtain Page number. Default value: 0
 * @method void setOffset(integer $Offset) Set Page number. Default value: 0
 * @method string getStatus() Obtain Pod status 
- Running 
- Pending 
- Error
 * @method void setStatus(string $Status) Set Pod status 
- Running 
- Pending 
- Error
 * @method string getPodName() Obtain Pod name
 * @method void setPodName(string $PodName) Set Pod name
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 */
class DescribeApplicationPodsRequest extends AbstractModel
{
    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var integer Number of items per page. Default value: 20
     */
    public $Limit;

    /**
     * @var integer Page number. Default value: 0
     */
    public $Offset;

    /**
     * @var string Pod status 
- Running 
- Pending 
- Error
     */
    public $Status;

    /**
     * @var string Pod name
     */
    public $PodName;

    /**
     * @var integer Source channel
     */
    public $SourceChannel;

    /**
     * @param string $EnvironmentId Environment ID
     * @param string $ApplicationId Application ID
     * @param integer $Limit Number of items per page. Default value: 20
     * @param integer $Offset Page number. Default value: 0
     * @param string $Status Pod status 
- Running 
- Pending 
- Error
     * @param string $PodName Pod name
     * @param integer $SourceChannel Source channel
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
