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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteFace request structure.
 *
 * @method string getPersonId() Obtain Person ID, which is the `PersonId` in the `CreatePerson` API.
 * @method void setPersonId(string $PersonId) Set Person ID, which is the `PersonId` in the `CreatePerson` API.
 * @method array getFaceIds() Obtain List of IDs of the faces to be deleted. The array element value is the `FaceId` returned by the `CreateFace` API.
 * @method void setFaceIds(array $FaceIds) Set List of IDs of the faces to be deleted. The array element value is the `FaceId` returned by the `CreateFace` API.
 */
class DeleteFaceRequest extends AbstractModel
{
    /**
     * @var string Person ID, which is the `PersonId` in the `CreatePerson` API.
     */
    public $PersonId;

    /**
     * @var array List of IDs of the faces to be deleted. The array element value is the `FaceId` returned by the `CreateFace` API.
     */
    public $FaceIds;

    /**
     * @param string $PersonId Person ID, which is the `PersonId` in the `CreatePerson` API.
     * @param array $FaceIds List of IDs of the faces to be deleted. The array element value is the `FaceId` returned by the `CreateFace` API.
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("FaceIds",$param) and $param["FaceIds"] !== null) {
            $this->FaceIds = $param["FaceIds"];
        }
    }
}
