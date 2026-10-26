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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryHunyuan3DTask response structure.
 *
 * @method string getStatus() Obtain <p>Task status</p><p>Enumeration values: </p><ul><li>WAIT: Queued, waiting to execute</li><li>RUN: In progress</li><li>DONE: Successfully completed, ResultFile3Ds has a value</li><li>FAIL: Failed, ErrorCode / ErrorMessage has a value</li></ul>
 * @method void setStatus(string $Status) Set <p>Task status</p><p>Enumeration values: </p><ul><li>WAIT: Queued, waiting to execute</li><li>RUN: In progress</li><li>DONE: Successfully completed, ResultFile3Ds has a value</li><li>FAIL: Failed, ErrorCode / ErrorMessage has a value</li></ul>
 * @method integer getProgress() Obtain <p>Progress percentage, 0-100. 0 if unknown; should be 100 when DONE; retains the last known value on FAIL</p>
 * @method void setProgress(integer $Progress) Set <p>Progress percentage, 0-100. 0 if unknown; should be 100 when DONE; retains the last known value on FAIL</p>
 * @method string getErrorCode() Obtain <p>Only available when Status=FAIL. String error code (for example, InternalError.ModelInference)</p>
 * @method void setErrorCode(string $ErrorCode) Set <p>Only available when Status=FAIL. String error code (for example, InternalError.ModelInference)</p>
 * @method string getErrorMessage() Obtain <p>Only has a value when Status=FAIL, detailed copywriting</p>
 * @method void setErrorMessage(string $ErrorMessage) Set <p>Only has a value when Status=FAIL, detailed copywriting</p>
 * @method array getResultFile3Ds() Obtain <p>Only has a value when Status=DONE. List of output files</p>
 * @method void setResultFile3Ds(array $ResultFile3Ds) Set <p>Only has a value when Status=DONE. List of output files</p>
 * @method string getTaskId() Obtain <p>Task ID</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID</p>
 * @method string getTaskType() Obtain <p>Task type</p><p>Enumeration values:</p><ul><li>text_to_3d: Text to 3D</li><li>image_to_3d: Image to 3D</li><li>multiview_to_3d: Multi-view to 3D</li><li>mesh_to_texture: Mesh to texture</li><li>mesh_to_geometry: Mesh to geometry</li></ul>
 * @method void setTaskType(string $TaskType) Set <p>Task type</p><p>Enumeration values:</p><ul><li>text_to_3d: Text to 3D</li><li>image_to_3d: Image to 3D</li><li>multiview_to_3d: Multi-view to 3D</li><li>mesh_to_texture: Mesh to texture</li><li>mesh_to_geometry: Mesh to geometry</li></ul>
 * @method string getPrompt() Obtain <p>Input prompt</p>
 * @method void setPrompt(string $Prompt) Set <p>Input prompt</p>
 * @method string getRefImage() Obtain <p>Image URL input in image-to-3D scenarios</p>
 * @method void setRefImage(string $RefImage) Set <p>Image URL input in image-to-3D scenarios</p>
 * @method array getMultiViewImages() Obtain <p>Image information input in multi-image to 3D scenarios</p>
 * @method void setMultiViewImages(array $MultiViewImages) Set <p>Image information input in multi-image to 3D scenarios</p>
 * @method string getCreateTime() Obtain <p>Task creation time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Task creation time</p>
 * @method string getUpdateTime() Obtain <p>Task update time</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Task update time</p>
 * @method integer getFaceCount() Obtain <p>The target face count for the submitted task</p>
 * @method void setFaceCount(integer $FaceCount) Set <p>The target face count for the submitted task</p>
 * @method string getGenerateType() Obtain <p>Generation type</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture)</li><li>Geometry: Generate only geometry (no texture, faster output speed)</li><li>Texture: Generate only texture (MeshUrl is required)</li></ul><p>Default value: Normal</p>
 * @method void setGenerateType(string $GenerateType) Set <p>Generation type</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture)</li><li>Geometry: Generate only geometry (no texture, faster output speed)</li><li>Texture: Generate only texture (MeshUrl is required)</li></ul><p>Default value: Normal</p>
 * @method integer getQueuePosition() Obtain <p>Task position in the queue; the smaller the value, the higher the priority.</p>
 * @method void setQueuePosition(integer $QueuePosition) Set <p>Task position in the queue; the smaller the value, the higher the priority.</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class QueryHunyuan3DTaskResponse extends AbstractModel
{
    /**
     * @var string <p>Task status</p><p>Enumeration values: </p><ul><li>WAIT: Queued, waiting to execute</li><li>RUN: In progress</li><li>DONE: Successfully completed, ResultFile3Ds has a value</li><li>FAIL: Failed, ErrorCode / ErrorMessage has a value</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Progress percentage, 0-100. 0 if unknown; should be 100 when DONE; retains the last known value on FAIL</p>
     */
    public $Progress;

    /**
     * @var string <p>Only available when Status=FAIL. String error code (for example, InternalError.ModelInference)</p>
     */
    public $ErrorCode;

    /**
     * @var string <p>Only has a value when Status=FAIL, detailed copywriting</p>
     */
    public $ErrorMessage;

    /**
     * @var array <p>Only has a value when Status=DONE. List of output files</p>
     */
    public $ResultFile3Ds;

    /**
     * @var string <p>Task ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task type</p><p>Enumeration values:</p><ul><li>text_to_3d: Text to 3D</li><li>image_to_3d: Image to 3D</li><li>multiview_to_3d: Multi-view to 3D</li><li>mesh_to_texture: Mesh to texture</li><li>mesh_to_geometry: Mesh to geometry</li></ul>
     */
    public $TaskType;

    /**
     * @var string <p>Input prompt</p>
     */
    public $Prompt;

    /**
     * @var string <p>Image URL input in image-to-3D scenarios</p>
     */
    public $RefImage;

    /**
     * @var array <p>Image information input in multi-image to 3D scenarios</p>
     */
    public $MultiViewImages;

    /**
     * @var string <p>Task creation time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Task update time</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>The target face count for the submitted task</p>
     */
    public $FaceCount;

    /**
     * @var string <p>Generation type</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture)</li><li>Geometry: Generate only geometry (no texture, faster output speed)</li><li>Texture: Generate only texture (MeshUrl is required)</li></ul><p>Default value: Normal</p>
     */
    public $GenerateType;

    /**
     * @var integer <p>Task position in the queue; the smaller the value, the higher the priority.</p>
     */
    public $QueuePosition;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Status <p>Task status</p><p>Enumeration values: </p><ul><li>WAIT: Queued, waiting to execute</li><li>RUN: In progress</li><li>DONE: Successfully completed, ResultFile3Ds has a value</li><li>FAIL: Failed, ErrorCode / ErrorMessage has a value</li></ul>
     * @param integer $Progress <p>Progress percentage, 0-100. 0 if unknown; should be 100 when DONE; retains the last known value on FAIL</p>
     * @param string $ErrorCode <p>Only available when Status=FAIL. String error code (for example, InternalError.ModelInference)</p>
     * @param string $ErrorMessage <p>Only has a value when Status=FAIL, detailed copywriting</p>
     * @param array $ResultFile3Ds <p>Only has a value when Status=DONE. List of output files</p>
     * @param string $TaskId <p>Task ID</p>
     * @param string $TaskType <p>Task type</p><p>Enumeration values:</p><ul><li>text_to_3d: Text to 3D</li><li>image_to_3d: Image to 3D</li><li>multiview_to_3d: Multi-view to 3D</li><li>mesh_to_texture: Mesh to texture</li><li>mesh_to_geometry: Mesh to geometry</li></ul>
     * @param string $Prompt <p>Input prompt</p>
     * @param string $RefImage <p>Image URL input in image-to-3D scenarios</p>
     * @param array $MultiViewImages <p>Image information input in multi-image to 3D scenarios</p>
     * @param string $CreateTime <p>Task creation time</p>
     * @param string $UpdateTime <p>Task update time</p>
     * @param integer $FaceCount <p>The target face count for the submitted task</p>
     * @param string $GenerateType <p>Generation type</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture)</li><li>Geometry: Generate only geometry (no texture, faster output speed)</li><li>Texture: Generate only texture (MeshUrl is required)</li></ul><p>Default value: Normal</p>
     * @param integer $QueuePosition <p>Task position in the queue; the smaller the value, the higher the priority.</p>
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ResultFile3Ds",$param) and $param["ResultFile3Ds"] !== null) {
            $this->ResultFile3Ds = [];
            foreach ($param["ResultFile3Ds"] as $key => $value){
                $obj = new File3D();
                $obj->deserialize($value);
                array_push($this->ResultFile3Ds, $obj);
            }
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("RefImage",$param) and $param["RefImage"] !== null) {
            $this->RefImage = $param["RefImage"];
        }

        if (array_key_exists("MultiViewImages",$param) and $param["MultiViewImages"] !== null) {
            $this->MultiViewImages = [];
            foreach ($param["MultiViewImages"] as $key => $value){
                $obj = new ViewImage();
                $obj->deserialize($value);
                array_push($this->MultiViewImages, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FaceCount",$param) and $param["FaceCount"] !== null) {
            $this->FaceCount = $param["FaceCount"];
        }

        if (array_key_exists("GenerateType",$param) and $param["GenerateType"] !== null) {
            $this->GenerateType = $param["GenerateType"];
        }

        if (array_key_exists("QueuePosition",$param) and $param["QueuePosition"] !== null) {
            $this->QueuePosition = $param["QueuePosition"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
