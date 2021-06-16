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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestartServiceRunPod request structure.
 *
 * @method string getNamespaceId() Obtain Environment ID.
 * @method void setNamespaceId(string $NamespaceId) Set Environment ID.
 * @method string getServiceId() Obtain Service ID.
 * @method void setServiceId(string $ServiceId) Set Service ID.
 * @method string getPodName() Obtain Pod name.
 * @method void setPodName(string $PodName) Set Pod name.
 * @method integer getLimit() Obtain Number of items per page.
 * @method void setLimit(integer $Limit) Set Number of items per page.
 * @method integer getOffset() Obtain Page number.
 * @method void setOffset(integer $Offset) Set Page number.
 * @method string getStatus() Obtain Pod status.
 * @method void setStatus(string $Status) Set Pod status.
 * @method integer getSourceChannel() Obtain Source channel.
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel.
 */
class RestartServiceRunPodRequest extends AbstractModel
{
    /**
     * @var string Environment ID.
     */
    public $NamespaceId;

    /**
     * @var string Service ID.
     */
    public $ServiceId;

    /**
     * @var string Pod name.
     */
    public $PodName;

    /**
     * @var integer Number of items per page.
     */
    public $Limit;

    /**
     * @var integer Page number.
     */
    public $Offset;

    /**
     * @var string Pod status.
     */
    public $Status;

    /**
     * @var integer Source channel.
     */
    public $SourceChannel;

    /**
     * @param string $NamespaceId Environment ID.
     * @param string $ServiceId Service ID.
     * @param string $PodName Pod name.
     * @param integer $Limit Number of items per page.
     * @param integer $Offset Page number.
     * @param string $Status Pod status.
     * @param integer $SourceChannel Source channel.
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
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

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
