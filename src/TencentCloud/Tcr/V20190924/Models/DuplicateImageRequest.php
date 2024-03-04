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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DuplicateImage request structure.
 *
 * @method string getRegistryId() Obtain Instance ID.
 * @method void setRegistryId(string $RegistryId) Set Instance ID.
 * @method string getSourceNamespace() Obtain Source namespace name.
 * @method void setSourceNamespace(string $SourceNamespace) Set Source namespace name.
 * @method string getSourceRepo() Obtain Source image repository name.
 * @method void setSourceRepo(string $SourceRepo) Set Source image repository name.
 * @method string getSourceReference() Obtain Source image tag or digest value. Currently, only tag is supported.
 * @method void setSourceReference(string $SourceReference) Set Source image tag or digest value. Currently, only tag is supported.
 * @method string getDestinationTag() Obtain Destination image version.
 * @method void setDestinationTag(string $DestinationTag) Set Destination image version.
 * @method string getDestinationNamespace() Obtain Destination namespace. Defaults to the same as the source if not filled.
 * @method void setDestinationNamespace(string $DestinationNamespace) Set Destination namespace. Defaults to the same as the source if not filled.
 * @method string getDestinationRepo() Obtain Destination image repository. Defaults to the same as the source if not filled.
 * @method void setDestinationRepo(string $DestinationRepo) Set Destination image repository. Defaults to the same as the source if not filled.
 * @method boolean getOverride() Obtain Whether to overwrite.
 * @method void setOverride(boolean $Override) Set Whether to overwrite.
 */
class DuplicateImageRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $RegistryId;

    /**
     * @var string Source namespace name.
     */
    public $SourceNamespace;

    /**
     * @var string Source image repository name.
     */
    public $SourceRepo;

    /**
     * @var string Source image tag or digest value. Currently, only tag is supported.
     */
    public $SourceReference;

    /**
     * @var string Destination image version.
     */
    public $DestinationTag;

    /**
     * @var string Destination namespace. Defaults to the same as the source if not filled.
     */
    public $DestinationNamespace;

    /**
     * @var string Destination image repository. Defaults to the same as the source if not filled.
     */
    public $DestinationRepo;

    /**
     * @var boolean Whether to overwrite.
     */
    public $Override;

    /**
     * @param string $RegistryId Instance ID.
     * @param string $SourceNamespace Source namespace name.
     * @param string $SourceRepo Source image repository name.
     * @param string $SourceReference Source image tag or digest value. Currently, only tag is supported.
     * @param string $DestinationTag Destination image version.
     * @param string $DestinationNamespace Destination namespace. Defaults to the same as the source if not filled.
     * @param string $DestinationRepo Destination image repository. Defaults to the same as the source if not filled.
     * @param boolean $Override Whether to overwrite.
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("SourceNamespace",$param) and $param["SourceNamespace"] !== null) {
            $this->SourceNamespace = $param["SourceNamespace"];
        }

        if (array_key_exists("SourceRepo",$param) and $param["SourceRepo"] !== null) {
            $this->SourceRepo = $param["SourceRepo"];
        }

        if (array_key_exists("SourceReference",$param) and $param["SourceReference"] !== null) {
            $this->SourceReference = $param["SourceReference"];
        }

        if (array_key_exists("DestinationTag",$param) and $param["DestinationTag"] !== null) {
            $this->DestinationTag = $param["DestinationTag"];
        }

        if (array_key_exists("DestinationNamespace",$param) and $param["DestinationNamespace"] !== null) {
            $this->DestinationNamespace = $param["DestinationNamespace"];
        }

        if (array_key_exists("DestinationRepo",$param) and $param["DestinationRepo"] !== null) {
            $this->DestinationRepo = $param["DestinationRepo"];
        }

        if (array_key_exists("Override",$param) and $param["Override"] !== null) {
            $this->Override = $param["Override"];
        }
    }
}
