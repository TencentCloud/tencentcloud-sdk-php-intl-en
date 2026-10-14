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
 * AI dubbing result information
 *
 * @method string getOriginSubtitlePath() Obtain <p>Path of subtitle file extracted from video.</p>
 * @method void setOriginSubtitlePath(string $OriginSubtitlePath) Set <p>Path of subtitle file extracted from video.</p>
 * @method string getTranslateSubtitlePath() Obtain <p>Path of a subtitle translation file extracted from a video.</p>
 * @method void setTranslateSubtitlePath(string $TranslateSubtitlePath) Set <p>Path of a subtitle translation file extracted from a video.</p>
 * @method string getVoiceClonedVideo() Obtain <p>File URL of the video after voice type cloning</p>
 * @method void setVoiceClonedVideo(string $VoiceClonedVideo) Set <p>File URL of the video after voice type cloning</p>
 * @method string getVoiceClonedMarkFile() Obtain <p>File address of the voice type clone annotation</p>
 * @method void setVoiceClonedMarkFile(string $VoiceClonedMarkFile) Set <p>File address of the voice type clone annotation</p>
 * @method string getVideoPath() Obtain <p>Video output path.</p>
 * @method void setVideoPath(string $VideoPath) Set <p>Video output path.</p>
 * @method string getOriginSubtitleFileId() Obtain <p>FileId of the subtitle file extracted from video.</p>
 * @method void setOriginSubtitleFileId(string $OriginSubtitleFileId) Set <p>FileId of the subtitle file extracted from video.</p>
 * @method string getTranslateSubtitleFileId() Obtain <p>FileId of a subtitle translation file extracted from a video.</p>
 * @method void setTranslateSubtitleFileId(string $TranslateSubtitleFileId) Set <p>FileId of a subtitle translation file extracted from a video.</p>
 * @method string getSpeakerPath() Obtain <p>Tag file path.</p>
 * @method void setSpeakerPath(string $SpeakerPath) Set <p>Tag file path.</p>
 * @method string getSpeakerFileId() Obtain <p>Fileid of the tag file.</p>
 * @method void setSpeakerFileId(string $SpeakerFileId) Set <p>Fileid of the tag file.</p>
 * @method string getEraseVideoFileId() Obtain <p>FileId of the video output after removal.</p>
 * @method void setEraseVideoFileId(string $EraseVideoFileId) Set <p>FileId of the video output after removal.</p>
 * @method string getEraseVideoPath() Obtain <p>Erase video output path.</p>
 * @method void setEraseVideoPath(string $EraseVideoPath) Set <p>Erase video output path.</p>
 * @method string getDstAudioPath() Obtain <p>Dubbed audio file path of the translation.</p>
 * @method void setDstAudioPath(string $DstAudioPath) Set <p>Dubbed audio file path of the translation.</p>
 * @method string getDstAudioFileId() Obtain <p>FileId of the audio file for the translated dubbing.</p>
 * @method void setDstAudioFileId(string $DstAudioFileId) Set <p>FileId of the audio file for the translated dubbing.</p>
 * @method string getDubbingEditInfoUrl() Obtain <p>Voice cloning editing information</p><p>Editing information for secondary modifications of voice cloning</p>
 * @method void setDubbingEditInfoUrl(string $DubbingEditInfoUrl) Set <p>Voice cloning editing information</p><p>Editing information for secondary modifications of voice cloning</p>
 * @method SubtitlePosition getSubtitlePos() Obtain <p>Subtitle position after removal. <strong>Note</strong>: only applicable to subtitle extraction when return of subtitle position is enabled.</p>
 * @method void setSubtitlePos(SubtitlePosition $SubtitlePos) Set <p>Subtitle position after removal. <strong>Note</strong>: only applicable to subtitle extraction when return of subtitle position is enabled.</p>
 * @method TaskOutputStorage getOutputStorage() Obtain <p>Storage location of the output file of the AI dubbing task.</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set <p>Storage location of the output file of the AI dubbing task.</p>
 */
class AIDubbingTaskOutput extends AbstractModel
{
    /**
     * @var string <p>Path of subtitle file extracted from video.</p>
     */
    public $OriginSubtitlePath;

    /**
     * @var string <p>Path of a subtitle translation file extracted from a video.</p>
     */
    public $TranslateSubtitlePath;

    /**
     * @var string <p>File URL of the video after voice type cloning</p>
     */
    public $VoiceClonedVideo;

    /**
     * @var string <p>File address of the voice type clone annotation</p>
     */
    public $VoiceClonedMarkFile;

    /**
     * @var string <p>Video output path.</p>
     */
    public $VideoPath;

    /**
     * @var string <p>FileId of the subtitle file extracted from video.</p>
     */
    public $OriginSubtitleFileId;

    /**
     * @var string <p>FileId of a subtitle translation file extracted from a video.</p>
     */
    public $TranslateSubtitleFileId;

    /**
     * @var string <p>Tag file path.</p>
     */
    public $SpeakerPath;

    /**
     * @var string <p>Fileid of the tag file.</p>
     */
    public $SpeakerFileId;

    /**
     * @var string <p>FileId of the video output after removal.</p>
     */
    public $EraseVideoFileId;

    /**
     * @var string <p>Erase video output path.</p>
     */
    public $EraseVideoPath;

    /**
     * @var string <p>Dubbed audio file path of the translation.</p>
     */
    public $DstAudioPath;

    /**
     * @var string <p>FileId of the audio file for the translated dubbing.</p>
     */
    public $DstAudioFileId;

    /**
     * @var string <p>Voice cloning editing information</p><p>Editing information for secondary modifications of voice cloning</p>
     */
    public $DubbingEditInfoUrl;

    /**
     * @var SubtitlePosition <p>Subtitle position after removal. <strong>Note</strong>: only applicable to subtitle extraction when return of subtitle position is enabled.</p>
     */
    public $SubtitlePos;

    /**
     * @var TaskOutputStorage <p>Storage location of the output file of the AI dubbing task.</p>
     */
    public $OutputStorage;

    /**
     * @param string $OriginSubtitlePath <p>Path of subtitle file extracted from video.</p>
     * @param string $TranslateSubtitlePath <p>Path of a subtitle translation file extracted from a video.</p>
     * @param string $VoiceClonedVideo <p>File URL of the video after voice type cloning</p>
     * @param string $VoiceClonedMarkFile <p>File address of the voice type clone annotation</p>
     * @param string $VideoPath <p>Video output path.</p>
     * @param string $OriginSubtitleFileId <p>FileId of the subtitle file extracted from video.</p>
     * @param string $TranslateSubtitleFileId <p>FileId of a subtitle translation file extracted from a video.</p>
     * @param string $SpeakerPath <p>Tag file path.</p>
     * @param string $SpeakerFileId <p>Fileid of the tag file.</p>
     * @param string $EraseVideoFileId <p>FileId of the video output after removal.</p>
     * @param string $EraseVideoPath <p>Erase video output path.</p>
     * @param string $DstAudioPath <p>Dubbed audio file path of the translation.</p>
     * @param string $DstAudioFileId <p>FileId of the audio file for the translated dubbing.</p>
     * @param string $DubbingEditInfoUrl <p>Voice cloning editing information</p><p>Editing information for secondary modifications of voice cloning</p>
     * @param SubtitlePosition $SubtitlePos <p>Subtitle position after removal. <strong>Note</strong>: only applicable to subtitle extraction when return of subtitle position is enabled.</p>
     * @param TaskOutputStorage $OutputStorage <p>Storage location of the output file of the AI dubbing task.</p>
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
        if (array_key_exists("OriginSubtitlePath",$param) and $param["OriginSubtitlePath"] !== null) {
            $this->OriginSubtitlePath = $param["OriginSubtitlePath"];
        }

        if (array_key_exists("TranslateSubtitlePath",$param) and $param["TranslateSubtitlePath"] !== null) {
            $this->TranslateSubtitlePath = $param["TranslateSubtitlePath"];
        }

        if (array_key_exists("VoiceClonedVideo",$param) and $param["VoiceClonedVideo"] !== null) {
            $this->VoiceClonedVideo = $param["VoiceClonedVideo"];
        }

        if (array_key_exists("VoiceClonedMarkFile",$param) and $param["VoiceClonedMarkFile"] !== null) {
            $this->VoiceClonedMarkFile = $param["VoiceClonedMarkFile"];
        }

        if (array_key_exists("VideoPath",$param) and $param["VideoPath"] !== null) {
            $this->VideoPath = $param["VideoPath"];
        }

        if (array_key_exists("OriginSubtitleFileId",$param) and $param["OriginSubtitleFileId"] !== null) {
            $this->OriginSubtitleFileId = $param["OriginSubtitleFileId"];
        }

        if (array_key_exists("TranslateSubtitleFileId",$param) and $param["TranslateSubtitleFileId"] !== null) {
            $this->TranslateSubtitleFileId = $param["TranslateSubtitleFileId"];
        }

        if (array_key_exists("SpeakerPath",$param) and $param["SpeakerPath"] !== null) {
            $this->SpeakerPath = $param["SpeakerPath"];
        }

        if (array_key_exists("SpeakerFileId",$param) and $param["SpeakerFileId"] !== null) {
            $this->SpeakerFileId = $param["SpeakerFileId"];
        }

        if (array_key_exists("EraseVideoFileId",$param) and $param["EraseVideoFileId"] !== null) {
            $this->EraseVideoFileId = $param["EraseVideoFileId"];
        }

        if (array_key_exists("EraseVideoPath",$param) and $param["EraseVideoPath"] !== null) {
            $this->EraseVideoPath = $param["EraseVideoPath"];
        }

        if (array_key_exists("DstAudioPath",$param) and $param["DstAudioPath"] !== null) {
            $this->DstAudioPath = $param["DstAudioPath"];
        }

        if (array_key_exists("DstAudioFileId",$param) and $param["DstAudioFileId"] !== null) {
            $this->DstAudioFileId = $param["DstAudioFileId"];
        }

        if (array_key_exists("DubbingEditInfoUrl",$param) and $param["DubbingEditInfoUrl"] !== null) {
            $this->DubbingEditInfoUrl = $param["DubbingEditInfoUrl"];
        }

        if (array_key_exists("SubtitlePos",$param) and $param["SubtitlePos"] !== null) {
            $this->SubtitlePos = new SubtitlePosition();
            $this->SubtitlePos->deserialize($param["SubtitlePos"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
