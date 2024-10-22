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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateKeyPair request structure.
 *
 * @method string getKeyName() Obtain Name of the key pair, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
 * @method void setKeyName(string $KeyName) Set Name of the key pair, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
 * @method integer getProjectId() Obtain ID of the project to which the created key pair belongs.

You can obtain a project ID in the following ways:
<li>Query the project ID through the project list.</li>
<li>Call the [DescribeProjects](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1) API and obtain the `projectId` from the return information.</li>
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which the created key pair belongs.

You can obtain a project ID in the following ways:
<li>Query the project ID through the project list.</li>
<li>Call the [DescribeProjects](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1) API and obtain the `projectId` from the return information.</li>
 * @method array getTagSpecification() Obtain Tag description list. This parameter is used to bind a tag to a key pair.
 * @method void setTagSpecification(array $TagSpecification) Set Tag description list. This parameter is used to bind a tag to a key pair.
 */
class CreateKeyPairRequest extends AbstractModel
{
    /**
     * @var string Name of the key pair, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
     */
    public $KeyName;

    /**
     * @var integer ID of the project to which the created key pair belongs.

You can obtain a project ID in the following ways:
<li>Query the project ID through the project list.</li>
<li>Call the [DescribeProjects](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1) API and obtain the `projectId` from the return information.</li>
     */
    public $ProjectId;

    /**
     * @var array Tag description list. This parameter is used to bind a tag to a key pair.
     */
    public $TagSpecification;

    /**
     * @param string $KeyName Name of the key pair, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
     * @param integer $ProjectId ID of the project to which the created key pair belongs.

You can obtain a project ID in the following ways:
<li>Query the project ID through the project list.</li>
<li>Call the [DescribeProjects](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1) API and obtain the `projectId` from the return information.</li>
     * @param array $TagSpecification Tag description list. This parameter is used to bind a tag to a key pair.
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
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }
    }
}
